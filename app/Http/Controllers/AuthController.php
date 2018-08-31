<?php namespace App\Http\Controllers;

use Auth, Request, Input;
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
        $user = User::where('email', $email)->first();
            if ($user != null && Hash::check($password, $user->password)){
                Auth::login($user);
                return redirect('/');
                
            }
            else{
                return redirect('user/login')->with('message', 'Login Failed');
            }
            
    }

}