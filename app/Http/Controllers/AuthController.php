<?php namespace App\Http\Controllers;

use Auth, Request, Input, Utilities;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\User;

class AuthController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        $email = Request::input('email');
        $password=Request::input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            switch (Utilities::get_user_type()){
                case 'admin': return redirect('/users');
                case 'manager': return redirect ('/groups');
                case 'instructor': return redirect ('/scores');
                case 'student': return redirect ('/student_card');
            }
          
        }
        else{
            return redirect()->back()->with('Error', 'Error al iniciar sesión. Compruebe sus datos');
        }   
    }
    public function login()
	{
		return view ('auth.login');
	}

    public function logout()
    {
    
        Auth::logout();
        return redirect('/home');
    }

    public function user_type()
    {
        if (Auth::check()){
           return Auth::user()->user_type_id;
        }
    }
}