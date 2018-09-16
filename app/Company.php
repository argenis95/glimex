<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model {

	protected $table = 'companies';

    public $primarykey = 'id';
    
    use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function managers()
    {
        return $this->belongsToMany('App\User', 'companies_managers', 'company_id', 'manager_id');
    }

}

