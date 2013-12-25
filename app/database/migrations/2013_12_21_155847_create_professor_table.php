<?php

use Illuminate\Database\Migrations\Migration;

class CreateProfessorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professor', function($table)
		{
			$table->increments('id');
			$table->string('nome',200);
			$table->string('email',100);
			$table->string('nascimento',20);
			$table->text('descricao');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professor');
	}

}