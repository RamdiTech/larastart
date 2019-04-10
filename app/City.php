<?php

namespace LaraStart;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
	protected $fillable = [
		'name', 'id_country', 'visible', 'slug'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function country()
	{
		return $this->belongsTo('LaraStart\Country', 'id_country');
	}

	public function employees_city()
	{
		return $this->hasMany('LaraStart\Employee');
	}
}
