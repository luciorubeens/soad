<?php

use Illuminate\Database\Migrations\Migration;

class CreateAlunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('aluno', function($table)
		{
			$table->increments('id');
			$table->string('nome',200);
			$table->string('email');
			$table->string('nascimento', 20);
			$table->integer('turma_id')->unsigned();
			$table->foreign('turma_id')->references('id')->on('turma');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('aluno');
	}

}