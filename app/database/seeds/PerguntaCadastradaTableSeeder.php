<?php

class PerguntaCadastradaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('perguntacadastrada')->delete();

		$perguntas = array(
			array(
				'pergunta'=>'Como você avalia o atua processo de avaliação de docentes?',
				'timestamp' = new DateTime,
				'avaliacao_id'=1
			);
		);

		DB::table('perguntacadastrada')->insert($perguntas);
	}
}