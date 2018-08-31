<?php


Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('home', 'PagesController@index');
Route::get('services', 'PagesController@services');
Route::get('login', 'PagesController@login');
Route::post('login','AuthController@authenticate');





