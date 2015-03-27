<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Journals extends Model {

	protected $fillable = ['title','body','writers_id'];

	public function writers(){

		return $this->belongsTo('App\Writers');
	}

}
