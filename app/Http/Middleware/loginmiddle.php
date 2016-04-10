<?php namespace App\Http\Middleware;

use Closure;
use Session;
use App\department;
class loginmiddle {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$data=Session::get('user');
		
		if($data==null)
		return $next($request);
		else
		{
			if ($data->roleid=='1')
			{  
		        $dept=department::all();
				return view ("adminpage",compact('dept'));
			}
			else 
			{
				return view ("displayemployee");
			}
		}
	}

}
