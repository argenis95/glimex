<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use Auth, Request, Input, Hash, Mail, Utilities, Exception;


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
		try 
		{
			$types= User_Type::all();
			return view('create_user')->with('types', $types);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
		
		
	}
	public function register(){
		try
		{
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
			return redirect('user_management')->with('message', 'Usuario creado con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
		
	}
	public function edit_form($id)
	{
		try
		{
			$user= User::findOrFail($id);
			$types= User_type::all();
			return view ('edit_user')->with(['types'=>$types, 'user'=>$user]);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}
	public function edit()
	{
		try
		{
			$input=Request::all();
			$user= User::find($input['user_id']);
			$user->email = $input['email'];
			$user->name = $input['name'];
			$user->last_name = $input['last_name'];
			$user->user_type_id = $input['user_type'];
			$user->save();
			return redirect('/user_management')->with('message', 'Usuario editado con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
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
		try
		{
			$email=Request::input('email');
			$user = User::where ('email', '=', $email)->first();
			if (!$user)
			{
				return redirect()->back()->with ('message', 'Usuario no encontrado');
			}
			$code=str_random(8);
			$user->reset_code=$code;
			$user->save();
			$id=$user['id'];
			Utilities::send_recovery_email($user, $code);
			$url= '/reset_password/';
			return redirect( $url.=$id)->with('user', $user);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}
	public function reset_password_form($id)
	{	
		try
		{
			$user=User::find($id);
			return view ('recovery_check')->with(['user'=>$user]);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud, el usuario no existe');
		}
	}

	public function password_change($id)
	{	
		try
		{
			$code= Request::input('reset_code');
			$password= Request::input('password');
			$user= User::find($id);
			if($code===$user['reset_code'])
			{
				$user->password = Hash::make($password);  
				$user->reset_code=null;
				$user->save();
				Utilities::send_password_email($user, $password);
				return redirect ('/login')->with('message', 'Tu contraseña se cambió satisfactoriamente');
			}
			return redirect()->back()->with ('message', 'Código de verificación incorrecto');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}

	public function deleted()
	{
		return view('deleted_users');
	}

	public function deleted_data()
	{
		return User::onlyTrashed()->get();
	}

	public function restore($id)
	{
		$user= User::onlyTrashed()->findOrFail($id);
		$user->restore();	
	}
	public function force_delete($id)
	{
		$user= User::onlyTrashed()->findOrFail($id);
		$user->forceDelete();
	}


	public function edit_account()
	{
		try
		{
			$user= Auth::user();
			return view ('edit_account')->with('user', $user);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}

	public function edit_info($user)
	{
		try
		{
			$input= Request::all();
			$user= Auth::user();
			$user->name=$input['name'];
			$user->last_name=$input['last_name'];
			$user->email=$input['email'];
			$user->save();
			return redirect('/account_config')->with('message', 'Datos cambiados con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}

	}

	public function edit_pass($user)
	{
		try
		{
			$password= Request::input('password');
			$user= Auth::user();
			$user->password = Hash::make($password); 
			$user->save();
			Utilities::send_password_email($user, $password);
			return redirect('/account_config')->with('message', 'Contraseña cambiada con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}	
}
