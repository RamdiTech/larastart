<?php

namespace LaraStart;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
	protected $fillable = [
		'name', 'last_name', 'email', 'slug', 'country_id', 'city_id'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function country_employee()
	{
		return $this->belongsTo('LaraStart\Country', 'country_id');
	}

	public function city_employee()
	{
		return $this->belongsTo('LaraStart\City', 'city_id');
	}

}
