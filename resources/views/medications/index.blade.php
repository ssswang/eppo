@extends('layouts.master')
@section('title','Medications')
@section('content')
<h2>Medications</h2>
<p>{!! link_to_route('medications.create', 'Create Medication') !!}</p>
@if(!$medications->count())
<p>No medication in database.</p>
@else
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Instruction</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($medications as $medication)
        <tr>
        <td>{{ $medication->id }}</td>
        <td>{{ $medication->name }}</td>
        <td>{{ $medication->instruction}}</td>
        <td>{{ $medication->created_at }}</td>
        <td>{{ $medication->updated_at }}</td>
        <td>
        {!! link_to_route('medications.edit', 'Update', $medication->id, array('class' => 'btn btn-info')) !!}
        </td>
        <td>
        {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('medications.destroy', $medication->id))) !!}
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
        {!! Form::close() !!}
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection