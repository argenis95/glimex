<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use App\Company;
use Auth, Request, Input, Hash, Mail, Utilities;

class GroupController extends Controller {

	public function dashboard()
	{
		return view ('manager_dashboard');
	}

	public function company_management(){

		return view ('company_management');
	}
	public function company_data()
	{
		return Company::all();
	}
	public function add_company()
	{
		try 
		{
			$managers= User::where('user_type_id', '=', '2')->get();
			return view('create_company')->with('managers', $managers);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
		
	}

}
