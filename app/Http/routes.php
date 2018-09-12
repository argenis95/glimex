<?php

Route::get('/test', function(){
    $user=Auth::user();
    dd($user);
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
    Route::get('/deleted_users', 'UserController@deleted');
    Route::get('/deleted', 'UserController@deleted_data');
    Route::post('/deleted_users/{id}', 'UserController@restore');
    Route::delete('/deleted_users/{id}', 'UserController@force_delete');
});

Route::group(['middleware' => ['manager']], function()
{
    Route::get('/manager_dashboard', 'GroupController@dashboard');

});


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/home', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/alegiances', 'PagesController@ale');

Route::group(['middleware'=> ['authcheck']], function()
{

    Route::get('/logout', 'AuthController@logout');
    Route::get('/account_config', 'UserController@edit_account');
    Route::put('/account_config/{id}', 'UserController@edit_info');
    Route::put('/change_password/{id}', 'UserController@edit_pass');

});
    
Route::group(['middleware' => ['logincheck']], function()
{
    Route::get('/reset_password', 'UserController@ask_password_recovery');
    Route::post('/reset_password', 'UserController@password_recovery');
    Route::get('/reset_password/{id}', 'UserController@reset_password_form');
    Route::post('/reset_password/{id}', 'UserController@password_change');
    Route::get('/login', 'AuthController@login');
    Route::post('/login','AuthController@authenticate');
});











