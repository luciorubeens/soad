<?php

use Illuminate\Database\Migrations\Migration;

class AddEixoToCoordenador extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('coordenador', function($table)
		{
			$table->string('eixo');
			$table->string('cursos_ministrados');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}