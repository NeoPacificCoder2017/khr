<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Suppliers;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $suppliers = [];


        for($i = 0; $i < 10; $i++):
            $validated = rand(0, 2);
            $validatedBy = ($validated == 0)?0:1;


            $suppliers[] = [
                
                'last_name' => str_random(10),
                'first_name' => str_random(10),
                'e-mail' => str_random(10),
                'celphone' => str_random(10),
                'validated' => $validated,
                'validated_by' => $validatedBy,
            ];
        
        endfor;

        foreach ($suppliers AS $supplier):

            Suppliers::create($supplier);

        endforeach;
    }
}
