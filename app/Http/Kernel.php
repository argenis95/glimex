<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		/**'App\Http\Middleware\VerifyCsrfToken',**/
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'App\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'App\Http\Middleware\RedirectIfAuthenticated',
		'admin' => 'App\Http\Middleware\AdminAuth',
		'manager'=> 'App\Http\Middleware\ManagerAuth',
		'student'=> 'App\Http\Middleware\StudentAuth',
		'instructor' => 'App\Http\Middleware\InstAuth',
		'logincheck' => 'App\Http\Middleware\LoginCheck',
		'authcheck' => 'App\Http\Middleware\AuthCheck'
	];

}
