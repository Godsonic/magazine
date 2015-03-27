<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutors extends Model {

	protected $fillable = ['firstname','lastname'];

    public function courses()
    {
        return $this->belongsToMany('App\Courses','courses_tutors');
    }

}
