<?php


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/contact', function()
{
    return 'Hello World';
});




