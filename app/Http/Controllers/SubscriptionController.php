<?php namespace App\Http\Controllers;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SubscriptionController extends Controller {
	
	public function __construct()
	{
		$this->middleware('subscription', ['only' => 'movies']);
	}

	public function index()
	{
		return view('subscription.index');
	}	
	
	public function movies()
	{
		return view('movies.index');
	}

}
