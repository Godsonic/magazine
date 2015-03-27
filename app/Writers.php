<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Writers extends Model {

	protected $fillable = ['firstname', 'lastname'];

    public function journals()
    {
        return $this->hasMany('App\Journals');
    }

}
