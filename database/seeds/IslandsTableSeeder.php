<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Island;


class IslandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name_islands = ['Tahiti', 'Bora Bora', 'Moorea', 'Huahine', 'Raiatea', 'Tahaa', 'Maupiti', 
        'Rangiroa', 'Manihi', 'Tikehau', 'Fakarava', 'Ahe', 'Mangareva', 'Nuku Hiva', 'Hiva Oa', 'Ua Pou', 
        'Rurutu', 'Tubuai', 'Raivavae', 'Rimatara', 'Makemo' ];
        //DB::table('islands')->delete();                   

        foreach($name_islands AS $island):
            Island::create(array('name' => $island));
        endforeach;

                            
    
    }
}
