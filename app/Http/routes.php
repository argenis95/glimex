<?php
use App\User;

Route::get('/test', function(){
    $type='2';
    $managers= User::where('user_type_id', '=', $type)->get();
    dd($managers);
});

Route::group(['middleware' => ['admin']], function()
{
    Route::get('/users', 'UserController@user_management');
    Route::get('/users_datatables', 'UserController@userdata');
    Route::get('/create_user', 'UserController@create_user');
    Route::post('/users','UserController@register');
    Route::get('/users/{id}', 'UserController@edit_form');
    Route::put('/users/{id}', 'UserController@edit');
    Route::delete('/users/{id}', 'UserController@delete');
    Route::get('/deleted_users', 'UserController@deleted');
    Route::get('/deleted', 'UserController@deleted_data');
    Route::post('/deleted_users/{id}', 'UserController@restore');
    Route::delete('/deleted_users/{id}', 'UserController@force_delete');

    Route::get('/companies_datatables', 'GroupController@company_data');
    Route::get('/company', 'GroupController@company_management');
    Route::get('/company/add', 'GroupController@add_company');
    Route::post('/company', 'GroupController@add_new_company');
    Route::get('/company/{id}', 'GroupController@edit_company');
});

Route::group(['middleware' => ['manager']], function()
{
    Route::get('/manager_dashboard', 'GroupController@dashboard');
   

});


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/home', 'PagesController@index');
Route::get('/services', 'PagesController@services');
Route::get('/allegiances', 'PagesController@alle');

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











