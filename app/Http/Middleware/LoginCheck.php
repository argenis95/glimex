<?php namespace App\Http\Middleware;

use Closure, Auth, Utilities;

class LoginCheck {

	public function handle($request, Closure $next)
	{
		{
			if (!Auth::check()) 
			{
				return $next($request);
			}
		
			return redirect('/home')->with('message', 'Acceso no autorizado');
		}
	}

}