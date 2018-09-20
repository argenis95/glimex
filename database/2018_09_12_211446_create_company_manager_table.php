<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesManagersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies_managers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('company_id')->foreign()
                  ->references('id')->on('companies')
				  ->onDelete('cascade');
			$table->integer('manager_id')->foreing()
                  ->references('id')->on('users')
				  ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies_managers');
	}

}
