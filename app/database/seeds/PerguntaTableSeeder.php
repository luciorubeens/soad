<?php

class PerguntaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('pergunta')->delete();

		$perguntas = array(
			array(
				'pergunta'=>"O que você acha do atual método de ensino?",
				'timestamp'=>new DateTime
			);
		);

		DB::table('pergunta')->insert($perguntas);
	}
}