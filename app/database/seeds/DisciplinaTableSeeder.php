<?php

class DisciplinaTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('disciplina')->delete();

		$disciplinas = array(
			array(
				'nome'=>'Conceitos de Informática',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Sistema Operacional Windows',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Internet',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Segurança da Informação',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Office XP',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Banco de Dados Relacionais',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Introdução a Programação',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Técnicas de Digitaçãoo',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Sistema Operacional Linux',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Códigos, Linguagens e Suas Tecnologias (Inglês)',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Códigos, Linguagens e Suas Tecnologias (Português)',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Saúde e Segurança do Trabalho',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Relações Humanas',
				'modulo'=>1,
				'curso_id'=>4
			),
			array(
				'nome'=>'Elementos de Eletricidade',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Ferramentas de Instalação',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Eletrônica Analógica Básica',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Eletrônica Digital e Microprocessadores',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Redes de Computadores',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Infraestrutura de Redes de Computadores',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Desenvolvimento de Aplicativos com Banco de Dados',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Códigos, Linguagens e Suas Tecnologias (Inglês)',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Códigos, Linguagens e Suas Tecnologias (Português)',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Saúde e Segurança do Trabalho',
				'modulo'=>2,
				'curso_id'=>4
			),
			array(
				'nome'=>'Organização Empresarial',
				'modulo'=>2,
				'curso_id'=>4
			),
		);

		DB::table('disciplina')->insert($disciplinas);
	}
}