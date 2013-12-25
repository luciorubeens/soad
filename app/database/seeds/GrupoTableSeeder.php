<?php

class GrupoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('grupo')->delete();

		$grupos = array(
			array(
				'turma_id'=>5,
				'disciplina_id'=>4,
				'professor_id'=>7,
			),
			array(
				'turma_id'=>5,
				'disciplina_id'=>7,
				'professor_id'=>6,
			)
		);

		DB::table('grupo')->insert($grupos);
	}
}