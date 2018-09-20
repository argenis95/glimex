<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model {

	protected $table = 'scores';

	public $primarykey = 'id';
	
	public function student()
	{
		return $this->belongsTo('App\User', 'student_id', 'id');
	}

}
