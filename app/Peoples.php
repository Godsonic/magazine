<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Peoples extends Model {

	protected $fillable = ['fullname'];
	
	public function houses()
	{
		return $this->hasMany('App\Houses');
	}

}
