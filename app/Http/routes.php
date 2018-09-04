<?php


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/home', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/login', 'PagesController@login');
Route::post('/login','AuthController@authenticate');
Route::get('/user_management', 'UserController@user_management');
Route::get('/logout', 'AuthController@logout');
Route::get('/users_datatables', 'UserController@userdata');
Route::get('/create_user', 'UserController@create_user');
Route::post('/user_management', 'UserController@register');
Route::get('/user_management/{id}', 'UserController@edit_form');
Route::put('/user_management/{id}', 'UserController@edit');
Route::delete('/user_management/{id}', 'UserController@delete');










