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
