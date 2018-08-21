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
			$table->integer('manager_id')->unsigned();
			$table->foreign('manager_id')
                  ->references('id')->on('managers')
				  ->onDelete('cascade');
			$table->integer('company_id')->unsigned();
			$table->foreign('company_id')->references('id')
				  ->on('companies')
				  ->onDelete('cascade');
			$table->timestamps();
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
