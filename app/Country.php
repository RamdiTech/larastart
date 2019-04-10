<?php

namespace LaraStart;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	protected $fillable = [
		'name', 'visible', 'slug'
	];

	public function getRouteKeyName()
	{
		return 'slug';
	}

	public function cities()
	{
		return $this->hasMany('LaraStart\City');
	}

	public function employees_country()
	{
		return $this->hasMany('LaraStart\Employee');	
	}
}
