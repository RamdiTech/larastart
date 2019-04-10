<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the city']) !!}
</div>
<div class="form-group">
	<label for="id_country">City</label>
	{!! Form::select('id_country', $countries, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group form-check">
	<input type="checkbox" class="form-check-input" id="visible_check" name="visible" {{$city->visible == 1 ? "checked='checked'" : ''}}>
	{!! Form::label('visible', 'Visible', ['class' => 'form-check-label']) !!}
</div>