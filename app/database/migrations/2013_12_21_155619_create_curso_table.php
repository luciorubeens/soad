<?php

use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso', function($table)
		{
			$table->increments('id');
			$table->string('curso',50);
			$table->integer('coordenador_id')->unsigned();
			$table->foreign('coordenador_id')->references('id')->on('coordenador');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('curso');
	}

}