<?php namespace App\Http\Middleware;

use Closure;
use Auth;
use DB;
//use Laravel\Cashier\Billable;
use Illuminate\Http\Request;

class subscription {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($request->user() && !$request->user()->subscribed())
		{
			return redirect('subscription');
		}
		
		
		return $next($request);
	}

}
