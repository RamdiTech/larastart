@extends('layouts.app')
@section('title', 'Cities Create')
@section('content')

{!! Form::open(['route' => 'cities.store', 'method' => 'POST', 'files' => true]) !!}
<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the city']) !!}
</div>
<div class="form-group">
	<label for="id_country">City</label>
	{!! Form::select('id_country', $countries, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('visible', 'Visible') !!}
	{!! Form::checkbox('visible', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}

@endsection