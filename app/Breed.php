<?php namespace Laravel;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
	public $timestamps = false;
	
	public function cats()
	{
		return $this->hasMany('Laravel\Cat');
	}
}