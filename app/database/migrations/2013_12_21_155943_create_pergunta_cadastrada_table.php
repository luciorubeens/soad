<?php

use Illuminate\Database\Migrations\Migration;

class CreatePerguntaCadastradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perguntacadastrada', function($table)
		{
			$table->increments('id');
			$table->text('pergunta');
			$table->timestamp('timestamp');
			$table->integer('avaliacao_id')->unsigned();
			$table->foreign('avaliacao_id')->references('id')->on('avaliacao');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perguntacadastrada');
	}

}