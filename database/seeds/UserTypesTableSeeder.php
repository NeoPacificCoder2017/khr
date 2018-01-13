<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder {
  public function run() {
		DB::table('user_types')->delete();

		UserType::create(array(
			'title' => 'consommateur'
		));

		UserType::create(array(
			'title' => 'employé'
		));

		UserType::create(array(
			'title' => 'société'
		));
	}
}