<?php namespace App\Classes;

use Auth, Request, Input, Mail;
use Illuminate\Routing\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use App\User;

class Utilities{

    public function get_user_type(){
        if (Auth::check()){
            $user_type=Auth::user()->user_type_id;
            switch ($user_type){
                case 1: return 'admin';
                case 2: return 'manager';
                case 3: return 'instructor';
                case 4: return 'student';
            }
        }
    }
    public function send_register_email($user, $password){
        
        Mail::send('emails.welcome_mail', ['user' => $user,'password'=> $password], static function($message) use ($user, $password)
		{
            $message->from('UserManagement@glimexico.com', 'GLI de México');
            $message->to($user['email'], $user['name'])->subject('Welcome!');
        });
    }
    public function send_recovery_email($user, $code){
        
        Mail::send('emails.recovery_mail', ['user' => $user, 'code'=> $code], static function($message) use ($user, $code)
		{
            $message->from('UserManagement@glimexico.com', 'GLI de México');
            $message->to($user['email'], $user['name'])->subject('Solicitud de recuperación de contraseña');
        });
    }
    public function send_password_email($user, $password){
        
        Mail::send('emails.send_password', ['user' => $user, 'password'=> $password], static function($message) use ($user, $password)
		{
            $message->from('UserManagement@glimexico.com', 'GLI de México');
            $message->to($user['email'], $user['name'])->subject('Cambio de contraseña exitoso');
        });
    }

}