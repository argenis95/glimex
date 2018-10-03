<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Course extends Model {

	protected $table = 'courses';

    public $primarykey = 'id';
    
    use SoftDeletes;
	protected $dates = ['deleted_at'];


	public function companie()
	{
		return $this->belongsTo('App\Company', 'company_id', 'id');
	}

	public function students()
    {
        return $this->belongsToMany('App\User', 'courses_users', 'course_id', 'student_id');
    }
	
	public function instructor()
	{
		return $this->belongsTo('App\User', 'instructor_id', 'id');
	}
	
	public function scores(){
		return $this->hasMany('App\Score', 'course_id', 'id');
	}
	
	
}
