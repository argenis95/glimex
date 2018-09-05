<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\Factory;
use App\User;

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

	

}
