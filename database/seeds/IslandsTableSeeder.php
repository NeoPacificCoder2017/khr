<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IslandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name_islands = array('name' => array('Tahiti', 'Bora Bora', 'Moorea', 'Huahine', 'Raiatea', 'Tahaa', 'Maupiti', 
        'Rangiroa', 'Manihi', 'Tikehau', 'Fakarava', 'Ahe', 'Mangareva', 'Nuku Hiva', 'Hiva Oa', 'Ua Pou', 
        'Rurutu', 'Tubuai', 'Raivavae', 'Rimatara', 'Makemo' )
                            );
    
    }
}
