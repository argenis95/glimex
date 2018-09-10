<?php namespace App\Http\Middleware;

use Closure, Auth, Utilities;

class AdminAuth {


	public function handle($request, Closure $next)
	{
		if (Utilities::get_user_type() == 'admin') 
		{
			return $next($request);
		}
	
		return redirect('/home')->with('message', 'Acceso no autorizado');
	}

}