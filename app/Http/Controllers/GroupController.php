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
	private $employees;
	public function edit_company($id)
	{
		try
		{
			$this->employees= Company::find($id)->managers;
			$managers= DB::table('users')
			->select('users.id', 'companies.id as compID', 'users.name', 'users.last_name', 'companies.name as company')
			->leftJoin('companies_managers', 'users.id', '=', 'companies_managers.manager_id')
			->leftJoin('companies', 'companies.id', '=', 'companies_managers.company_id')
			->where('users.user_type_id','=', '2')
			->whereNull('companies.id')
			->orWhere('companies.id', '<>', $id)
			->where(function($query){
				
				foreach ($this->employees as $employ)
			   {
				   $query->where('users.name', '<>', $employ->name);
			   }
		   })
			->groupBy('users.name')
			->get();
			$company= Company::findOrFail($id);
			return view ('edit_company')->with(['company'=>$company, 'employees'=>$this->employees, 'managers'=>$managers]);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}
	public function edit()
	{
		try
		{
			DB::transaction (function()
			{
				$name=Request::input('name');
				$managers=Request::input('manager_list_selected');
				$users=Request::input('manager_list');
				$id=Request::input('company_id');
				$company= Company::find($id);
				$company->name=$name;
				$company->save();
				foreach ((array)$managers as $manager){
					$del_log= Company_Manager::where('manager_id', '=', $manager)->where('company_id', '=', $id);
					$del_log->delete();
				}
				foreach ((array)$managers as $manager){
					$company_manager= new Company_Manager;
					$company_manager->company_id=$company['id'];
					$company_manager->manager_id=$manager;
					$company_manager->save();
				}
				foreach ((array)$users as $user){
					$del_company_manager= Company_Manager::where('manager_id', '=', $user)->where('company_id', '=', $id);
					$del_company_manager->delete();
				}
			});
			return redirect('/company')->with('message', 'Empresa editada con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}

	public function delete_company($id)
	{
		try
		{	
			
			$company= Company::findOrFail($id);
			$company->delete();
			$relations= Company_Manager::where('company_id', '=', $id);
			$relations->delete();
			
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');

		}
	}

}
