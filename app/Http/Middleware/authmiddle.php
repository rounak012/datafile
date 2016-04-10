<?php namespace App\Http\Middleware;

use Closure;
use Session;
class authmiddle {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$data1=Session::get('user');
		
		
		return $next($request);
		
	}

}
