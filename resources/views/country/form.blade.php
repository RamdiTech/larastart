<div class="form-group">
	{!! Form::label('name', 'Name') !!}
	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the country']) !!}
</div>
<div class="form-group form-check">
	<input type="checkbox" class="form-check-input" id="visible_check" name="visible" {{$country->visible == 1 ? "checked='checked'" : ''}}>
	{!! Form::label('visible', 'Visible', ['class' => 'form-check-label']) !!}
</div>