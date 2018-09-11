<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use Auth, Request, Input, Hash, Mail, Utilities;

class GroupController extends Controller {

	public function dashboard()
	{
		return view ('manager_dashboard');
	}

}
