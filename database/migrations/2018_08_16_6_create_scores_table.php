<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('scores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('year');
			$table->integer('month');
			$table->integer('lessons_taken');
			$table->integer('absences');
			$table->integer('times_late');
			$table->integer('fluency');
			$table->integer('prununciation');
			$table->integer('grammar_word_order');
			$table->integer('vocabulary');
			$table->integer('presentation');
			$table->integer('class_participation');
			$table->integer('homework_assignements');
			$table->integer('writing');
			$table->integer('reading');
			$table->integer('listenning');
			$table->integer('exam');
			$table->integer('final');
			$table->string('comments', 255);
			$table->integer('student_id')->unsigned();
			$table->foreign('student_id')
                  ->references('id')->on('students')
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
		Schema::drop('scores');
	}

}
