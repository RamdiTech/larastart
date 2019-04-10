@extends('layouts.app')
@section('title', 'Employee Create')
@section('content')

@include('common.errors')

{!! Form::open(['route' => 'employees.store', 'method' => 'POST', 'files' => true]) !!}

@include('employee.form')
{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}
@endsection

@section('scripts')
<script src="/js/dropdown.js"></script>
@endsection