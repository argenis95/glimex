<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\User;

class PasswordGeneratorController extends Controller {
 

    
    public function generate()
    {
        return view('auth.registerdone')->with('passwords', $passwords);
    }


}