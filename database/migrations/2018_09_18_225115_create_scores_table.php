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
			$table->integer('lessons_taken');
			$table->integer('absences');
			$table->integer('times_late');
			$table->integer('fluency');
			$table->integer('pronunciation');
			$table->integer('grammar_word_order');
			$table->integer('vocabulary');
			$table->integer('presentation');
			$table->integer('class_participation');
			$table->integer('homework_assignements');
			$table->integer('writing');
			$table->integer('reading');
			$table->integer('exam');
			$table->integer('final');
			$table->string('comments');
			$table->boolean('lock');
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
