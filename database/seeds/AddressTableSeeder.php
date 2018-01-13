<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Address; // on ajoute le model

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

            $addresses [ ]  = [
                'user_id' => $userId,
                'shipping' => $shipping,
                'billing' => $billing,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'company_name' => $company_name,
                'Adress_line_1' => $Adress_line_1,
                'Adress_line_2' => $Adress_line_2,
                'island_id' => $island_id,
                'city_id' => $city_id,
                'telephone' => $telephone,
                'email' => $email

            ];
        endfor;
        
        foreach($addresses as $address):

            Address::create($address);
            
            // DB::table('addresses')->insert($address);
        endforeach;
    
    }
}
