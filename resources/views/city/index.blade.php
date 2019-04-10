@extends('layouts.app')
@section('title', 'Cities')
@section('content')

<table class="table table-hover table-striped table-borderless text-center">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Country</th>
			<th>Visible</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($cities as $city)
		<tr>
			<td>{{$city->id}}</td>
			<td>{{$city->name}}</td>
			<td>{{$city->country["name"]}}</td>
			<td>{{$city->visible == 1 ? "Si" : "No"}}</td>
			<td>
				<a href="/cities/{{$city->slug}}/edit" class="btn btn-primary"></a>
			</td>
			<td>
				<a href="" class="btn btn-danger"></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection