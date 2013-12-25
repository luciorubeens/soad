<?php

class AlunoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('aluno')->delete();

		$alunos = array(
			array(
				'nome'=>'Lúcio Rubens Lopes Caetano',
				'email'=>'luciorubeens@gmail.com',
				'nascimento'=>'29/12/1995',
				'turma_id'=>5
			),
			array(
				'nome'=>'Jessielen Oliveira dos Santos',
				'email'=>'jessielen@hotmail.com.br',
				'nascimento'=>'15/08/1995',
				'turma_id'=>3
			),
			array(
				'nome'=>'Walisson Farias do Nascimento',
				'email'=>'waka.waka@gmail.com',
				'nascimento'=>'16/01/1996',
				'turma_id'=>2
			)
		);

		DB::table('aluno')->insert($alunos);
	}
}