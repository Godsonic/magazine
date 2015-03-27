<?php

function user_photos_path(){return public_path().'/images/'.Auth::user()->name.'/';}

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::resource('galleries', 'galleryController');

Route::resource('photo', 'PhotoController');

Route::get('home', 'HomeController@index');

Route::get('subscription', 'SubscriptionController@index');
Route::get('movies', 'SubscriptionController@movies');

Route::get('todo', 'TodoController@index');

/*
Route::get('article','ArticleController@index');
Route::get('article/create','ArticleController@create');
Route::get('article/{id}','ArticleController@show');
Route::post('article','ArticleController@store');

*/

Route::resource('article', 'ArticleController');
Route::resource('library', 'LibraryController');

Route::resource('school', 'SchoolController');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
