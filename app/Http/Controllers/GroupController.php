<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use App\Company;
use App\Company_Manager;
use Auth, Request, Input, Hash, Mail, Utilities, DB;

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
	public function add_new_company()
	{
		try
		{
			DB::transaction (function()
			{
				$managers=Request::input('manager_list_selected');
				$name= Request::input('name');
				$company= new Company;
				$company->name=$name;
				$company->save();
				
				
				foreach ($managers as $manager){
					$company_manager= new Company_Manager;
					$company_manager->company_id=$company['id'];
					$company_manager->manager_id=$manager;
					$company_manager->save();
				}
			});
			return redirect('/company')->with('message', 'Compañía añadida con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}

}
