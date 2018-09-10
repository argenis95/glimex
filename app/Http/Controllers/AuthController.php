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
        $password =Request::input('password');
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            switch (Utilities::get_user_type()){
                case 'admin': return redirect('/user_management');
                case 'manager': return redirect ('/group_management');
                case 'instructor': return redirect ('/student_management');
                case 'student': return redirect ('/account_management');
            }
          
        }
        else{
            return redirect('/login')->with('message', 'Login Failed');
        }
        /*$user = User::where('email', $email)->first();
            if ($user != null && Hash::check($password, $user->password)){
                Auth::login($user);
                return redirect('/');
                
            }
            else{
                return redirect('user/login')->with('message', 'Login Failed');
            }*/
            
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