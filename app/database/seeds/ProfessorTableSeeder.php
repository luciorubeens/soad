<?php

class ProfessorTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('professor')->delete();

		$professores = array(
			array(
				'nome'=>'Adriano Cordeiro Bezerra',
				'email'=>'adriano.bezerra@eter.org.br',
				'nascimento'=>'01/02/1980',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Aldenir Apolinário Bazilio',
				'email'=>'aldenir.bazilio@eter.org.br',
				'nascimento'=>'02/03/1981',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Aldilânio Martins',
				'email'=>'aldilanio.martins@eter.org.br',
				'nascimento'=>'03/04/1982',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Braulio Menezes Leite',
				'email'=>'braulio.leite@eter.org.br',
				'nascimento'=>'04/05/1983',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Edna Araújo de Sena',
				'email'=>'edna.sena@eter.org.br',
				'nascimento'=>'05/06/1984',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Fernanda Maria Almeida Floriano',
				'email'=>'fernanda.floriano@eter.org.br',
				'nascimento'=>'06/07/1985',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Virgínia Maria de França Genuíno ',
				'email'=>'virginia.genuino@eter.org.br',
				'nascimento'=>'07/08/1986',
				'descricao'=>'...'
			),
			array(
				'nome'=>'Wesley Porto Santos',
				'email'=>'wesley.santos@eter.org.br',
				'nascimento'=>'08/09/1987',
				'descricao'=>'...'
			)
		);

		DB::table('professor')->insert($professores);
	}
}