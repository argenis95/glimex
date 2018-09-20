<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\User_Type;
use App\Company;
use App\Company_Manager;
use App\Course;
use App\Course_User;
use App\Score;
use Auth, Request, Input, Hash, Mail, Utilities, DB, Response;

class NotesController extends Controller {

	public function dashboard()
	{
		$user_id=Auth::user()['id'];
		$courses=User::find($user_id)->courses;
		return view ('notes_management')->with('courses', $courses);
	}

	public function notes_manage($id)
	{
		$student= User::find($id);
		$courses= $student->signed;
		$scores= $student->scores;
		return view ('view_student')->with(['student'=>$student, 'courses'=>$courses, 'scores'=>$scores, 'modal'=>'true']);
	}

	public function notesdata($id)
	{
		$course=Course::findOrFail($id);
		$students=$course->students;
		return $students;
	}

	public function notes($id)
	{
		$score=Score::findOrFail($id);
		return $score;
	}
}
