@extends('layouts.app')
@section('title', 'Countries Create')
@section('content')

{!! Form::open(['route' => 'countries.store', 'method' => 'POST', 'files' => true]) !!}
<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the country']) !!}
</div>
<div class="form-group">
	{!! Form::label('visible', 'Visible') !!}
	{!! Form::checkbox('visible', null, ['class' => 'form-control']) !!}
</div>
{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}

@endsection