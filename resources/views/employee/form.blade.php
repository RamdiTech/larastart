<div class="form-row">
	<div class="form-group col-md-6">
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your Name']) !!}
	</div>
	<div class="form-group col-md-6">
		{!! Form::label('last_name', 'LastName') !!}
		{!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your LastName']) !!}
	</div>
</div>
<div class="form-group">
	{!! Form::label('email', 'Email') !!}
	{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your Email']) !!}
</div>
<div class="form-row">
	<div class="form-group col-md-6">
		{!! Form::label('country', 'Country') !!}
		{!! Form::select('country_id', $countries, null, ['class' => 'form-control', 'id' => 'select_country']) !!}
	</div>
	<div class="form-group col-md-6">
		{!! Form::label('city', 'City') !!}
		{!! Form::select('city_id', ['placeholder' => 'Select a City'], null, ['class' => 'form-control', 'id' => 'select_city']) !!}
		@php
		//{!! Form::select('city_id', ['placeholder' => 'Select a City'], null, ['class' => 'form-control', 'id' => 'select_city']) !!}
		//{!! Form::select('city_id', $cities, null, ['class' => 'form-control', 'id' => 'select_city']) !!}
		@endphp
	</div>
</div>
