<?php

class AvaliacaoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('avaliacao')->delete();

		$avaliacoes = array(
			array(
				'modulo'=>2,
				'inicio'=> '2013-11-01',
				'fim'=> '2013-12-31',
				'turma_id'=> 6,
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			)
		);

		DB::table('avaliacao')->insert($avaliacoes);
	}
}