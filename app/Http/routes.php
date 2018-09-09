<?php



Route::get('/test', function(){
   
    $user=array("email"=>"argenis95@hotmail.es", "name"=> "Argenis");
    $password= '12345678';
    return Utilities::send_register_email($user, $password);
});

Route::group(['middleware' => ['admin']], function()
{
    Route::get('/user_management', 'UserController@user_management');
    Route::get('/users_datatables', 'UserController@userdata');
    Route::get('/create_user', 'UserController@create_user');
    Route::post('/user_management','UserController@register');
    Route::get('/user_management/{id}', 'UserController@edit_form');
    Route::put('/user_management/{id}', 'UserController@edit');
    Route::delete('/user_management/{id}', 'UserController@delete');
});

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/home', 'PagesController@index');
Route::get('/services', 'PagesController@services');

Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['logincheck']], function()
{
    Route::get('/password_recovery', 'UserController@ask_password_recovery');
    Route::post('/password_recovery', 'UserController@password_recovery');
    Route::get('/reset_password', 'UserController@reset_password');
    Route::put('/password_recovery', 'UserController@password_change');
    Route::get('/login', 'AuthController@login');
    Route::post('/login','AuthController@authenticate');
});









