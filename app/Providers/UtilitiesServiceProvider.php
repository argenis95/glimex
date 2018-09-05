<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class UtilitiesServiceProvider extends ServiceProvider {



	public function register()
	{
		App::bind('Utilities', function(){
					return new App\Classes\Utilities;  
			});

	}

}
