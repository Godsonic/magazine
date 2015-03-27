<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model {

	protected $fillable = [
	
			'user_id',
			'filename',
			'thumbnail',
			'title',
	];
	
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
