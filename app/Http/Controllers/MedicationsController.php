<?php

namespace eppo\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use eppo\Http\Requests;
use eppo\Http\Controllers\Controller;

use eppo\Medication;
use eppo\PpoItem;
use eppo\Lucode;

class MedicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            $medications = new Collection();
            if($request->name)
            {
                $medications = Medication::select('id','name','created_at','updated_at')
                ->where('name', 'like', '%'.$request->name.'%')
                ->paginate(10);
            }
        }
        else
            $medications = Medication::select('id','name','created_at','updated_at')->paginate(10);
        return view('medications.index', compact('medications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medications.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:medications',
        ]);
        $input = $request->all();
        Medication::create( $input );

        return redirect()->route('medications.index')->with('success-message', 'Medication created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $medication = Medication::findOrFail($id);
        $items = PpoItem::where('medication_id',$medication->id)->paginate(10);
        $lucodes = Lucode::where('medication_id', $medication->id)->get();
        $isAdminView = true;

         //flash a back url
        $request->session()->put('backUrl', $request->fullUrl());

        return view('medications.show', compact('medication','items','lucodes','isAdminView'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medication = Medication::findOrFail($id);
        return view('medications.edit', compact('medication'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $input = $request->all();
        $medication = Medication::findOrFail($id);
        $medication->update( $input );

        return redirect()->route('medications.index')->with('success-message', 'Medication updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medication = Medication::findOrFail($id);
        $medication->delete();

        return redirect()->route('medications.index')->with('success-message', 'Medication deleted.');
    }
}
