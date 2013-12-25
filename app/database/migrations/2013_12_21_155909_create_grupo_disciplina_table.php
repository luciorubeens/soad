<?php

use Illuminate\Database\Migrations\Migration;

class CreateGrupoDisciplinaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo', function($table)
		{
			$table->increments('id');
			$table->integer('turma_id')->unsigned();
			$table->integer('disciplina_id')->unsigned();
			$table->integer('professor_id')->unsigned();
			$table->foreign('turma_id')->references('id')->on('turma');
			$table->foreign('disciplina_id')->references('id')->on('disciplina');
			$table->foreign('professor_id')->references('id')->on('professor');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo');
	}

}