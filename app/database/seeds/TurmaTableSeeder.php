<?php

class TurmaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('turma')->delete();

		$turmas = array(
			array(
				'turno'=>'M',
				'curso_id'=>1
			),
			array(
				'turno'=>'M',
				'curso_id'=>2
			),
			array(
				'turno'=>'T',
				'curso_id'=>2
			),
			array(
				'turno'=>'T',
				'curso_id'=>3
			),
			array(
				'turno'=>'N',
				'curso_id'=>4
			),
			array(
				'turno'=>'M',
				'curso_id'=>5
			),
			array(
				'turno'=>'N',
				'curso_id'=>5
			),
			array(
				'turno'=>'N',
				'curso_id'=>6
			),
			array(
				'turno'=>'M',
				'curso_id'=>7
			),
			array(
				'turno'=>'T',
				'curso_id'=>7
			),
			array(
				'turno'=>'N',
				'curso_id'=>8
			),
		);

		DB::table('turma')->insert($turmas);
	}
}