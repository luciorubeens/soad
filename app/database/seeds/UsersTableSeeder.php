<?php

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		$user = array(
			array(
				"username"=>"luciorubeens@gmail.com",
				"password"=>Hash::make('29/12/1995'),
				"tipo"=>0 //aluno
			),
			array(
				"username"=>"daniel@eter.org.br",
				"password"=>Hash::make("02/04/1980"),
				"tipo"=>2 // coordenador
			)
		);

		DB::table('users')->insert($user);
	}
}