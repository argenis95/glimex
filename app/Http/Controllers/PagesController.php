<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\User;
use Auth;

use Illuminate\Http\Request;

class PagesController extends Controller {
	public function about (){
		return view('about');
	}

	public function index(){
		return view('home');
	}
	
	public function services(){
		return view('services');
	}

	public function alle(){
		return view('allegiances');
	}

	public function student_card(){
		$id= Auth::user()['id'];
		$user= User::findOrFail($id);
		$courses= $user->signed;
		$scores= $user->scores;
		return view ('student_card')->with(['user'=>$user, 'courses'=>$courses, 'scores'=>$scores]);
	}

	public function contact(){
		return view('contact');
	}
	
	public function student_log(){
		$id=Auth::user()['id'];
		$url='/student_card/';
		return redirect ($url.=$id);
	}

	public function back(){
		return redirect()->back();
	}
}
