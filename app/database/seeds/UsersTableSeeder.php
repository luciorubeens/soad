<?php

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		$user = array(
			"username"=>"luciorubeens@gmail.com",
			"password"=>Hash::make('29/12/1995')
		);

		DB::table('users')->insert($user);
	}
}