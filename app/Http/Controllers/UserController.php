<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller {

	public function user_management()
	{
		return view('user_management');
	}
	public function userdata(){
		return User::all();
	}
}
