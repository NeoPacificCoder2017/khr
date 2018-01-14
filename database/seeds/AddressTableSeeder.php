<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Address; 

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [ ];

        for($i = 0; $i < 10; $i++) :
            $userId = rand(1, 10);
            $island_id = rand (1, 15);
            $city_id = rand (1, 20);
            $telephone = rand(1, 100);

            $addresses [ ]  = [
                'user_id' => $userId,
                'shipping' => str_random(10),
                'billing' => str_random(10),
                'firstname' => str_random(10),
                'lastname' => str_random(10),
                'company_name' => str_random(10),
                'address_line_1' => str_random(10),
                'address_line_2' => str_random(10),
                'island_id' => $island_id,
                'city_id' => $city_id,
                'telephone' => $telephone,
                'email' => str_random(10)

            ];
        endfor;
        
        foreach($addresses as $address):

            Address::create($address);
            
            // DB::table('addresses')->insert($address);
        endforeach;
    
    }
}
