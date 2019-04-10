@extends('layouts.app')
@section('title', 'Countries')
@section('content')

<table class="table table-hover table-striped table-borderless text-center">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Visible</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
	</thead>
	<tbody>
		@foreach($countries as $country)
		<tr>
			<td>{{$country->id}}</td>
			<td>{{$country->name}}</td>
			<td>{{$country->visible == 1 ? "Si" : "No"}}</td>
			<td>
				<a href="/countries/{{$country->slug}}/edit" class="btn btn-primary"></a>
			</td>
			<td>
				<a href="" class="btn btn-danger"></a>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection