<?php

class CursoTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('curso')->delete();

		$cursos = array(
			array(
				"curso"=>"Agroecologia",
				"coordenador_id"=>6
			),
			array(
				"curso"=>"Eletrônica",
				"coordenador_id"=>4
			),
			array(
				"curso"=>"Enfermagem",
				"coordenador_id"=>3
			),
			array(
				"curso"=>"Equipamentos Biomédicos",
				"coordenador_id"=>3
			),
			array(
				"curso"=>"Informática",
				"coordenador_id"=>1
			),
			array(
				"curso"=>"Logística",
				"coordenador_id"=>5
			),
			array(
				"curso"=>"Telecomunicações",
				"coordenador_id"=>1
			),
			array(
				"curso"=>"Transações Imobiliárias",
				"coordenador_id"=>5
			)
		);

		DB::table('curso')->insert($cursos);
	}
}