<?php namespace App\Http\Middleware;

use Closure, Auth, Utilities;

class AuthCheck {

	public function handle($request, Closure $next)
	{
		{
			if (Auth::check()) 
			{
				return $next($request);
			}
		
			return redirect('/home')->with('error', 'Acceso no autorizado');
		}
	}

}
