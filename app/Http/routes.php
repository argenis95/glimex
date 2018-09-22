<?php
use App\User;
use App\Company;
use App\Course;
use Illuminate\Support\Facades\Auth;

Route::get('/test', function(){
    $student= User::find(7);
    $courses= $student->signed;
    return $courses;
});

Route::group(['middleware' => ['admin']], function()
{
    Route::get('/users', 'UserController@user_management');
    Route::get('/users_datatables', 'UserController@userdata');
    Route::get('/users/create', 'UserController@create_user');
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
    Route::put('/company/{id}', 'GroupController@edit');
    Route::delete('/company/{id}', 'GroupController@delete_company');
    Route::get('/reports', 'NotesController@reports');
    Route::get('/get_reports', 'NotesController@all_reports');
    Route::post('/scores/unlock/{id}', 'NotesController@unlock');
});

Route::group(['middleware' => ['manager']], function()
{
    Route::get('/groups', 'GroupController@group_management');
    Route::get('/groups_datatables', 'GroupController@groupdata');
    Route::get('/groups/edit/{id}', 'GroupController@edit_group');
    Route::put('/groups/{id}', 'GroupController@edit2');
    Route::delete('/groups/{id}', 'GroupController@delete_group');
    Route::get('/groups/add', 'GroupController@create_group');
    Route::post ('/groups', 'GroupController@register_group');
});

Route::group(['middleware' => ['instructor']], function()
{
    Route::get('/scores', 'NotesController@dashboard');
    Route::get('/scores/student/{id}', 'NotesController@notes_manage');
    Route::get('/scores_data/{id}', 'NotesController@notesdata');
    Route::get('/scores_data/notes/{id}', 'NotesController@notes');
    Route::get('/report_data/{id}', 'NotesController@reportdata');
    Route::get('/scores/edit/{id}', 'NotesController@edit_scores');
    Route::put('/scores/{id}', 'NotesController@edit');
    Route::post('scores/student/{id}', 'NotesController@post');
    Route::get('/scores/create/{id}', 'NotesController@create');
});

Route::group(['middleware' => ['student']], function(){
    Route::get('/student_card', 'PagesController@student_card');
});


Route::get('/contact', 'PagesController@contact');
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











