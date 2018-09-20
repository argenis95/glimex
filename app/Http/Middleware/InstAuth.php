<?php namespace App\Http\Middleware;

use Closure, Auth, Utilities;


class InstAuth {

	public function handle($request, Closure $next)
	{
		if (Utilities::get_user_type() == 'instructor') 
		{
			return $next($request);
		}
	
		return redirect('/home')->with('error', 'Acceso no autorizado');
	}


}
