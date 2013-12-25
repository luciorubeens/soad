<?php

use Illuminate\Database\Migrations\Migration;

class CreateDisciplinaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('disciplina', function($table)
		{
			$table->increments('id');
			$table->string('nome',50);
			$table->integer('modulo');
			$table->integer('curso_id')->unsigned();
			$table->foreign('curso_id')->references('id')->on('disciplina');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('disciplina');
	}

}