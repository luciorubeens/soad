<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{	
		
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		
		$this->call('CoordenadorTableSeeder');
		$this->command->info('A tabela coordenador foi populada!');

		$this->call('CursoTableSeeder');
		$this->command->info('A tabela curso foi populada!');

		$this->call('TurmaTableSeeder');
		$this->command->info('A tabela turma foi populada!');

		$this->call('AlunoTableSeeder');
		$this->command->info('A tabela aluno foi populada!');

		$this->call('AvaliacaoTableSeeder');
		$this->command->info('A tabela avaliacao foi populada!');

		$this->call('DisciplinaTableSeeder');
		$this->command->info('A tabela disciplina foi populada!');

		$this->call('ProfessorTableSeeder');
		$this->command->info('A tabela professor foi populada!');

		$this->call('GrupoTableSeeder');
		$this->command->info('A tabela grupo foi populada!');

		$this->call('PerguntaTableSeeder');
		$this->command->info('A tabela pergunta foi populada!');

		$this->call('PerguntaCadastradaTableSeeder');
		$this->command->info('A tabela pergunta 2 foi populada!');

		$this->call('UsersTableSeeder');

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}