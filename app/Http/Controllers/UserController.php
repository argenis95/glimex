<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use Auth, Request, Input, Hash;


class UserController extends Controller {

	public function user_management()
	{
		return view('user_management');
	}
	public function userdata()
	{
		return User::all();
	}
	public function create_user(){
		$types= User_Type::all();
		return view('create_user')->with('types', $types);
	}
	public function register(){
		$register=Request::all();
		$password= Hash::make(str_random(8));
		$user = User::create(['name' => $register['name'],'last_name' => $register['last_name'], 'email' => $register['email'], 'user_type_id' => $register['user_type'], 'password' => $password]);
		return redirect('user_management');
	}
	public function edit($id)
	{
		$user= User::findOrFail($id);
		$types= User_type::all();
		return view ('edit_user')->with(['types'=>$types, 'user'=>$user]);
	}
	
}
