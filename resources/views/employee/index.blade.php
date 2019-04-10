@extends('layouts.app')
@section('title', 'Employees')
@section('content')

@include('common.success')
<table class="table table-hover table-striped table-borderless text-center">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>LastName</th>
			<th>Email</th>
			<th>Country</th>
			<th>City</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($employees as $employee)
		<tr>
			<td>{{$employee->id}}</td>
			<td>{{$employee->name}}</td>
			<td>{{$employee->last_name}}</td>
			<td>{{$employee->email}}</td>
			<td>{{$employee->country_employee["name"]}}</td>
			<td>{{$employee->city_employee["name"]}}</td>
			<td>
				<a href="/employees/{{$employee->slug}}/edit" class="btn btn-primary"></a>
			</td>
			<td>
				{!! Form::open(['route' => ['employees.destroy', $employee->slug], 'method' => 'DELETE']) !!}
				{!! Form::submit('', ['class' => 'btn btn-danger']) !!}
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection