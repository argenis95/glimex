<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cours_id')->foreign()
                  ->references('id')->on('courses')
				  ->onDelete('cascade');
			$table->integer('student_id')->foreing()
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
		Schema::drop('courses_users');
	}

}
