@extends('layouts.app')
@section('title', 'Employee Edit')
@section('content')

{!! Form::model($employee, ['route' => ['employees.update', $employee], 'method' => 'PUT', 'files' => true]) !!}

@include('employee.form')
{!! Form::submit('Save', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}
@endsection

@section('scripts')
<script src="/js/dropdown.js"></script>
@endsection