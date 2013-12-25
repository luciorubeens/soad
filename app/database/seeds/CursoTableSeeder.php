<?php

class CursoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('curso')->delete();

		$cursos = array(
			array(
				"curso"=>"Agroecologia",
				"coordenador_id"=>5
			),
			array(
				"curso"=>"Eletrônica",
				"coordenador_id"=>3
			),
			array(
				"curso"=>"Enfermagem",
				"coordenador_id"=>2
			),
			array(
				"curso"=>"Equipamentos Biomédicos",
				"coordenador_id"=>2
			),
			array(
				"curso"=>"Informática",
				"coordenador_id"=>0
			),
			array(
				"curso"=>"Logística",
				"coordenador_id"=>4
			),
			array(
				"curso"=>"Telecomunicações",
				"coordenador_id"=>0
			),
			array(
				"curso"=>"Transações Imobiliárias",
				"coordenador_id"=>4
			)
		);

		DB::table('curso')->insert($cursos);
	}
}