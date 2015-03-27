<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model {

	protected $fillable = ['title','grade'];

    public function tutors(){

        return $this->belongsToMany('App\Tutors', 'courses_tutors');
    }

}
