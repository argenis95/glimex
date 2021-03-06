<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name', 'last_name', 'email', 'password', 'user_type_id', 'reset_code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	
	public function companies()
    {
        return $this->belongsToMany('App\Company', 'companies_managers', 'manager_id', 'company_id');
	}
	public function signed()
    {
        return $this->belongsToMany('App\Course', 'courses_users', 'student_id', 'course_id');
	}
	
	public function courses()
	{
		return $this->hasMany('App\Course', 'instructor_id', 'id');
	}

	public function scores()
	{
		return $this->hasMany('App\Score', 'student_id', 'id');
	}

}
