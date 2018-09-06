<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use Auth, Request, Input, Hash, Mail;


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
		$password= str_random(8);
		$hashedpass= Hash::make($password);
		$user = new User;
		$user->name = $register['name'];
		$user->last_name= $register['last_name'];
		$user->email = $register['email'];
		$user->password = $hashedpass;
		$user->user_type_id = $register['user_type'];
		$user->save();
		return redirect('user_management');
		
	}
	public function edit_form($id)
	{
		$user= User::findOrFail($id);
		$types= User_type::all();
		return view ('edit_user')->with(['types'=>$types, 'user'=>$user]);
	}
	public function edit()
	{
		
		$input=Request::all();
		$user= User::find($input['user_id']);
		$user->email = $input['email'];
		$user->name = $input['name'];
		$user->last_name = $input['last_name'];
		$user->user_type_id = $input['user_type'];
		$user->save();
		return redirect('user_management');
	}
	public function delete($id)
	{
		$user= User::findOrFail($id);
		$user->delete();	
	}
	
}
