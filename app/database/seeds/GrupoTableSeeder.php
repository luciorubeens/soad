<?php

class GrupoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('grupo')->delete();

		$grupos = array(
			array(
				'turma_id'=>6,
				'disciplina_id'=>5,
				'professor_id'=>8,
			),
			array(
				'turma_id'=>6,
				'disciplina_id'=>8,
				'professor_id'=>7,
			)
		);

		DB::table('grupo')->insert($grupos);
	}
}