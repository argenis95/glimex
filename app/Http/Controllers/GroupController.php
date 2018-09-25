<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use App\Company;
use App\Company_Manager;
use App\Course;
use App\Course_User;
use Auth, Request, Input, Hash, Mail, Utilities, DB, Response;

class GroupController extends Controller {

	public function group_management()
	{
		return view ('group_management');
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
	public function edit_company($id)
	{
		try
		{
			$employees= Company::find($id)->managers;
			$managers= DB::table('users')
			->select('users.id', 'companies.id as compID', 'users.name', 'users.last_name', 'companies.name as company')
			->leftJoin('companies_managers', 'users.id', '=', 'companies_managers.manager_id')
			->leftJoin('companies', 'companies.id', '=', 'companies_managers.company_id')
			->where('users.user_type_id','=', '2')
			->whereNull('companies.id')
			->orWhere('companies.id', '<>', $id)
			->where(function($query) use ($employees){
				
				foreach ($employees as $employ)
			   {
				   $query->where('users.name', '<>', $employ->name);
			   }
		   })
			->groupBy('users.name')
			->get();
			$company= Company::findOrFail($id);
			return view ('edit_company')->with(['company'=>$company, 'employees'=>$employees, 'managers'=>$managers]);
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

	public function groupdata()
	{
		/*$user_id= Auth::user()['id'];
		$user_companies= User::with('companies', 'companies.courses')->find($user_id);
		$companies=array();
		foreach ($user_companies->companies as $userCompany)
		{
			array_push($companies, $userCompany);
		}*/
		$user_id= Auth::user()['id'];
		$data= DB::table('users')
		->select('courses.id', 'companies.name as company', 'courses.name as course')
		->join('companies_managers', 'users.id', '=', 'companies_managers.manager_id')
		->join('companies', 'companies.id', '=', 'companies_managers.company_id')
		->join('courses', 'courses.company_id', '=', 'companies.id')
		->where('users.id','=', $user_id)
		->whereNull('courses.deleted_at')
		->get();
		return $data;
	}

	public function create_group()
	{	
		try
		{
			$instructors=User::where('user_type_id', '=', '3')->get();
			$students=User::where('user_type_id', '=', '4')->get();
			$user_id=Auth::user()['id'];
			$manager=User::find($user_id);
			$companies=$manager->companies;
			return view ('create_group')->with(['instructors'=>$instructors, 'students'=>$students, 'companies'=>$companies]);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}	
	}

	public function register_group()
	{	
		$name=Request::input('name');
		$instructor=Request::input('instructor');
		$company=Request::input('company');
		$students=Request::input('student_list_selected');
		$group= new Course;
		$group->name=$name;
		$group->instructor_id=$instructor;
		$group->company_id=$company;
		$group->save();
		foreach ((array)$students as $student)
		{
			$course_user= new Course_User;
			$course_user->course_id=$group['id'];
			$course_user->student_id=$student;
			$course_user->save();
		}
		return redirect('/groups')->with('message', 'Grupo creado con éxito');
		}

	public function edit_group($id)
	{
		try
		{	
			$instructors=User::where('user_type_id', '=', '3')->get();
			$student_list= Course::find($id)->students;
			$unsigned= DB::table('users')
			->select('users.id', 'courses.id as cID', 'users.name', 'users.last_name', 'courses.name as course')
			->leftJoin('courses_users', 'users.id', '=', 'courses_users.student_id')
			->leftJoin('courses', 'courses.id', '=', 'courses_users.course_id')
			->where('users.user_type_id','=', '4')
			->whereNull('courses.id')
			->orWhere('courses.id', '<>', $id)
			->where(function($query) use ($student_list){
				
				foreach ($student_list as $student)
			    {
				   $query->where('users.name', '<>', $student->name);
			    }
		   	})
			->groupBy('users.name')
			->get();
			$group= Course::findOrFail($id);
			return view ('edit_groups')->with(['group'=>$group, 'students'=>$student_list, 'unsigned'=>$unsigned, 'instructors'=>$instructors]);
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}

	public function edit2()
	{
		try
		{
			DB::transaction (function()
			{
				$instructor=Request::input('instructor');
				$name=Request::input('name');
				$students=Request::input('student_list_selected');
				$signeds=Request::input('student_list');
				$id=Request::input('group_id');
				$group= Course::find($id);
				$group->name=$name;
				$group->instructor_id=$instructor;
				$group->save();
				foreach ((array)$students as $student){
					$del_log= Course_User::where('student_id', '=', $student)->where('course_id', '=', $id);
					$del_log->delete();
				}
				foreach ((array)$students as $student){
					$course_user= new Course_User;
					$course_user->course_id=$group['id'];
					$course_user->student_id=$student;
					$course_user->save();
				}
				foreach ((array)$signeds as $signed){
					$del_course_user= Course_User::where('student_id', '=', $signed)->where('course_id', '=', $id);
					$del_course_user->delete();
				}
			});
			return redirect('/groups')->with('message', 'Grupo editado con éxito');
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');
		}
	}

	public function delete_group($id)
	{
		try
		{	
			
			$company= Course::findOrFail($id);
			$company->delete();
			$relations= Course_User::where('course_id', '=', $id);
			$relations->delete();
			
		}
		catch(Exception $e)
		{
			return redirect()->back()->with('error', 'No se pudo procesar su solicitud');

		}
	}

}
