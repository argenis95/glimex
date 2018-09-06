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
    public function send_email($user, $password){
        
        Mail::send('emails.welcome_mail', ['user' => $user,'password'=> $password], static function($message) use ($user, $password)
		{
            $message->from('example@example.com', 'Ejemplo');
            $message->to($user['email'], $user['name'])->subject('Welcome!');
            
        });
    }
}