<?php

use Illuminate\Database\Migrations\Migration;

class CreateTurmaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turma', function($table)
		{
			$table->increments('id');
			$table->string('turno',1);
			$table->integer('curso_id')->unsigned();
			$table->foreign('curso_id')->references('id')->on('curso');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('turma');
	}

}