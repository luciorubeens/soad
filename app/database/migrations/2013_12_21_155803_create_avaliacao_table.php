<?php

use Illuminate\Database\Migrations\Migration;

class CreateAvaliacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avaliacao', function($table)
		{
			$table->increments('id');
			$table->integer('modulo');
			$table->dateTime('inicio');
			$table->dateTime('fim');
			$table->integer('turma_id')->unsigned();
			$table->timestamps();
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
		Schema::drop('avaliacao');
	}

}