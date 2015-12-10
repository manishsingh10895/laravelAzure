<?php namespace Laravel;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model{
	protected $fillable = ['name','date_of_birth','breed_id'];
	public function breed()
	{
		return $this->belongsTo('Laravel\Breed');
	}
}