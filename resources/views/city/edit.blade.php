@extends('layouts.app')
@section('title', 'Cities Edit')
@section('content')

{!! Form::model($city, ['route' => ['cities.update', $city], 'method' => 'PUT', 'files' => true]) !!}

@include('city.form')
{!! Form::submit('Update', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}

@endsection