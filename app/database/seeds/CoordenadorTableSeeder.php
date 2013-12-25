<?php

use Illuminate\Database\Seeder;

class CoordenadorTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('coordenador')->delete();

		$c1 = array(
			'nome'=>'Daniel Perez',
			'email'=>'daniel@eter.org.br',
			'nascimento'=>'02/04/1980',
			"eixo"=>"Informação e Comunicação",
			"cursos_ministrados"=>"Informática e Telecomunicação",
			"descricao"=>"Coordenador dos cursos Informática e Telecomunicações, ingressou no redentorista no ano de 2013.."
		);

		$c2 = array(			
			"nome"=>"Mariana Karla",
			"email"=>"mariana@eter.org.br",
			"nascimento"=>"15/07/1985",
			"eixo"=>"Segurança",
			"cursos_ministrados"=>"Segurança do Trabalho",
			"descricao"=>"Coordenadora do curso técnico em Segurança do Trabalho.."
		);

		$c3 = array(
			"nome"=>"Renata Cavalcanti",
			"email"=>"renata@eter.org.br",
			"nascimento"=>"10/05/1980",
			"eixo"=>"Ambiente e Saúde",
			"cursos_ministrados"=>"Enfermagem e Equipamentos Biomédicos",
			"descricao"=>".."
		);

		$c4 = array(
			"nome"=>"Marbyo Lopes",
			"email"=>"marbyo@eter.org.br",
			"nascimento"=>"29/11/1975",
			"eixo"=>"Controle e Processos Industriais",
			"cursos_ministrados"=>"Eletrônica",
			"descricao"=>".."
		);

		$c5 = array(
			"nome"=>"Guilherme dos Santos",
			"email"=>"guilherme@eter.org.br",
			"nascimento"=>"20/09/1970",
			"eixo"=>"Gestão e Negócios",
			"cursos_ministrados"=>"Logística e Transações Imobiliárias",
			"descricao"=>".."
		);

		$c6 = array(
			"nome"=>"Dalva Maria",
			"email"=>"dalva@eter.org.br",
			"nascimento"=>"20/09/1970",
			"eixo"=>"Recursos Naturais",
			"cursos_ministrados"=>"Agroecologia",
			"descricao"=>".."
		);

		DB::table('coordenador')->insert($c1);
		DB::table('coordenador')->insert($c2);
		DB::table('coordenador')->insert($c3);
		DB::table('coordenador')->insert($c4);
		DB::table('coordenador')->insert($c5);
	}
}