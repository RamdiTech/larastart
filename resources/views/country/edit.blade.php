@extends('layouts.app')
@section('title', 'Country Edit')
@section('content')

{!! Form::model($country, ['route' => ['countries.update', $country], 'method' => 'PUT', 'files' => true]) !!}

@include('country.form')
{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}

@endsection