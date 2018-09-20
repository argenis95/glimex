<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('score_id')->foreign()
                  ->references('id')->on('scores')
				  ->onDelete('cascade');
			$table->integer('student_id')->foreing()
                  ->references('id')->on('users')
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
		Schema::drop('scores_users');
	}

}
