<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\DoseCalculationType;

class DoseCalculationTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = DoseCalculationType::all();
        return view('dosecalculationtypes.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosecalculationtypes.create');
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
            'name' => 'required',
        ]);
        $input = $request->all();
        DoseCalculationType::create( $input );

        return redirect()->route('dosecalculationtypes.index')->with('success-message', 'Dose Calculation Type created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $types = DoseCalculationType::findOrFail($id);
        return view('dosecalculationtypes.show', compact('types'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = DoseCalculationType::findOrFail($id);
        return view('dosecalculationtypes.edit', compact('type'));
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
        $input = $request->all();
        $type = DoseCalculationType::findOrFail($id);
        $type->update( $input );

        return redirect()->route('dosecalculationtypes.index')->with('success-message', 'Dose Calculation Type updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = DoseCalculationType::findOrFail($id);
        $type->delete();

        return redirect()->route('dosecalculationtypes.index')->with('success-message', 'Dose Calculation Type deleted.');
    }
}