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
use Auth, Request, Input, Hash, Mail, Utilities, DB, Response, Excel;

class NotesController extends Controller {

	public function dashboard()
	{
		$user_id=Auth::user()['id'];
		$courses=User::find($user_id)->courses;
		return view ('notes_management')->with('courses', $courses);
	}

	public function studentsdata(){
		$user_id= Auth::user()['id'];
		$data= DB::table('users')
		->select('courses.id', 'companies.name as company', 'courses.name as course')
		->join('courses', 'courses.instructor_id', '=', 'users.id')
		->join('companies', 'companies.id', '=', 'courses.company_id')
		->where('users.id','=', $user_id)
		->whereNull('courses.deleted_at')
		->get();
		return $data;
	}

	public function notes_manage($id)
	{
		$student= User::find($id);
		$courses= $student->signed;
		$scores= $student->scores;
		return view ('view_student')->with(['student'=>$student, 'courses'=>$courses, 'scores'=>$scores]);
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

	public function reportdata($id)
	{
		$reports=DB::table('users')
		->select('users.id as uID', 'scores.id', 'courses.id as cID', 'courses.name as course', 'scores.year', 'scores.month', 'scores.lessons_taken', 'scores.absences', 'scores.times_late', 'scores.fluency', 'scores.pronunciation', 'scores.grammar_word_order', 'scores.vocabulary', 'scores.presentation', 'scores.class_participation', 'scores.homework_assignements', 'scores.writing', 'scores.reading', 'scores.listenning', 'scores.exam', 'scores.final', 'scores.comments', 'scores.updated_at', 'scores.month_lock') 
		->join('scores', 'users.id', '=', 'scores.student_id')
		->join('courses', 'courses.id', '=', 'scores.course_id')
		->where('users.id', '=', $id)
		->get();
		return $reports;
	}

	public function edit_scores($id){
		$score=Score::findOrFail($id);
		$student=$score->student;
		return view('edit_score')->with(['score'=>$score, 'student'=>$student]);

	}

	public function edit($id){
		$input= Request::all();
		$score= Score::findOrFail($id);
		$score->lessons_taken=$input['lessons'];
		$score->absences=$input['absences'];
		$score->times_late=$input['times_late'];
		$score->fluency=$input['fluency'];
		$score->pronunciation=$input['pronunciation'];
		$score->grammar_word_order=$input['grammar'];
		$score->vocabulary=$input['vocabulary'];
		$score->presentation=$input['presentation'];
		$score->class_participation=$input['participation'];
		$score->homework_assignements=$input['homework'];
		$score->writing=$input['writing'];
		$score->reading=$input['reading'];
		$score->listenning=$input['listenning'];
		$score->exam=$input['exam'];
		$score->final=$input['final'];
		$score->comments=$input['comments'];
		$score->month_lock= ++$score->month_lock;
		$score->save();
		$url='/scores/student/';
		return redirect ($url.= $score->student_id)->with('message', 'Boletín editado con éxito');

	}

	public function reports(){
		return view ('reports');
	}

	public function all_reports(){
		$reports=DB::table('scores')
		->select('scores.id', 'scores.id as sID', 'users.name as username', 'users.last_name', 'scores.created_at', 'scores.month_lock', 'courses.name as course', 'scores.year', 'scores.month')
		->join('users', 'scores.student_id', '=', 'users.id')
		->join('courses', 'courses.id', '=', 'scores.course_id')
		->get();
		return $reports;
	}

	public function unlock($id){

		$score= Score::findOrFail($id);
		$score->month_lock='0';
		$score->save();
	}
	public function delete($id){

		$score= Score::findOrFail($id);
		$score->delete();
	}

	public function create($id){
		$student=User::findOrFail($id);
		return view ('create_note')->with('student', $student);
	}

	public function student_card($id){
		$reports=DB::table('scores')
		->select('scores.id', 'courses.id as cID', 'courses.name as course', 'scores.year', 'scores.month', 'scores.lessons_taken', 'scores.absences', 'scores.times_late', 'scores.fluency', 'scores.pronunciation', 'scores.grammar_word_order', 'scores.vocabulary', 'scores.presentation', 'scores.class_participation', 'scores.homework_assignements', 'scores.writing', 'scores.reading', 'scores.listenning', 'scores.exam', 'scores.final', 'scores.comments', 'scores.updated_at', 'scores.month_lock') 
		->join('courses', 'courses.id', '=', 'scores.course_id')
		->where('scores.student_id', '=', $id)
		->get();
		return $reports;

	}

	public function post(){
		$input= Request::all();
		$score= new Score;
		$score->year=$input['year'];
		$score->month=$input['month'];
		$score->lessons_taken=$input['lessons'];
		$score->absences=$input['absences'];
		$score->times_late=$input['times_late'];
		$score->fluency=$input['fluency'];
		$score->pronunciation=$input['pronunciation'];
		$score->grammar_word_order=$input['grammar'];
		$score->vocabulary=$input['vocabulary'];
		$score->presentation=$input['presentation'];
		$score->class_participation=$input['participation'];
		$score->homework_assignements=$input['homework'];
		$score->writing=$input['writing'];
		$score->reading=$input['reading'];
		$score->listenning=$input['listenning'];
		$score->exam=$input['exam'];
		$score->final=$input['final'];
		$score->comments=$input['comments'];
		$score->month_lock= '0';
		$score->student_id=$input['student_id'];
		$score->save();
		$url='/scores/student/';
		return redirect ($url.= $score->student_id)->with('message', 'Boletín creado con éxito');
	}

	public function search_comments($id){
		$score=Score::find($id);
		return $score;
	}

	public function excel($id){
		/*$url='notas_';
		$data=Score::find($id);
		Excel::create($url.=$id , function($excel) use ($data){
			$excel->sheet('Notas', function($sheet) use ($data){
				$sheet->fromArray($data);
			});
		})->download('xls');*/
		$user_id=Auth::user()['id'];
		$url='/student_card/';
		return redirect($url.$user_id)->with('error', 'Función no implementada');
		
	}

	
}
