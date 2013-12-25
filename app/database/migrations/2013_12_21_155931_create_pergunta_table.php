<?php

use Illuminate\Database\Migrations\Migration;

class CreatePerguntaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pergunta', function($table)
		{
			$table->increments('id');
			$table->text('pergunta');
			$table->timestamp('timestamp');
			$table->integer('coordenador_id')->nullable()->unsigned();
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
		Schema::drop('pergunta');
	}

}