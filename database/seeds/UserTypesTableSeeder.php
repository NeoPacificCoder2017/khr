<?php

use Illuminate\Database\Seeder;
use App\UserType;

class UserTypesTableSeeder extends Seeder
{
	/**
	* Run the database seeds.
	*
	* @return void
	*/
	public function run()
	{
		$userTypes = ['consommateur', 'employé', 'société'];
		DB::table('user_types')->delete();
				
		foreach($userTypes as $userType) {
			UserType::create(array('title' => $userType));
		}
	}
}
