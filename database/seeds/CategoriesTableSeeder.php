<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        DB::table('PRODUCTS_CATEGORIE')->insert([
            
                    [
            
                        'id' => 1,
            
                        'nom' => 'légumes',
                        'parent_id' => '0',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
            
                    ],
            
                    [
            
                        'id' => 2,
            
                        'nom' => 'fruits',
                        'parent_id' => '0',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],
            
                    [
            
                        'id' => 3,
            
                        'nom' => 'feuilles',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],
            
                    [
            
                        'id' => 4,
                        'nom' => 'tiges',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],
            
                    [
            
                        'id' => 5,
                        'nom' => 'fleurs',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],

                    [
                        
                        'id' => 6,
                        'nom' => 'racines',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],

                    
                    [
                        
                        'id' => 7,
                        'nom' => 'bulbes',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],

                    [
                        
                        'id' => 8,
                        'nom' => 'secs',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],

                    [
                        
                        'id' => 9,
                        'nom' => 'fruits_légumes',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],
            
                    [
                        
                        'id' => 10,
                        'nom' => 'herbes',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],

                    [
                        
                        'id' => 11,
                        'nom' => 'tuberccules',
                        'parent_id' => '1',
                        'created_at' => '2018-01-11 09:59:16',
                        'updated_at' => '2018-01-11 09:59:16',
                    ],


                ]);


    }
}
