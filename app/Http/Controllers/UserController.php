<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use Auth, Request, Input, Hash, Mail, Utilities;


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
		Utilities::send_register_email($user, $password);
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
		return redirect('/user_management');
	}
	public function delete($id)
	{
		$user= User::findOrFail($id);
		$user->delete();	
	}

	public function ask_password_recovery()
	{
		return view ('password_recovery');
	}
	public function password_recovery()
	{
		$email=Request::input('email');
		$user = User::where ('email', '=', $email)->first();
		if (!$user)
		{
			return redirect ('/home');
		}
		$code=str_random(8);
		$user->reset_code=$code;
		$user->save();
		Utilities::send_recovery_email($user, $code);
		return view ('recovery_check')->with('user', $user);
	}

	public function password_change()
	{	
		/*$input= Request::all();
		$user= User::find($input['user_id']);
		if($input['reset_code']==$user['reset_code'])
		{
			if ($input['password']==$input['password_check'])
			{
				$user->password = $input['password'];  
				$user->reset_code=null;
				return redirect ('/login');
			}
			return view('recovery_check')->with('user', $user);
		}
		return view('recovery_check')->with('user', $user);*/


	}

	
}
