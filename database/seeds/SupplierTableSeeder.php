<?php

use Illuminate\Database\Seeder;
use App\Supplier;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [];

        for($i = 0; $i < 10; $i++):
            $validated = rand(0, 2);
            $validatedBy = ($validated == 0)?0:1;

            $suppliers[] = [
                
                'name' => str_random(10),
                'last_name' => str_random(10),
                'first_name' => str_random(10),
                'email' => str_random(10)."@gmail.com",
                'cellphone' => rand(1000000,1500000),
                'validated' => $validated,
                'validated_by' => $validatedBy,
            ];
        
        endfor;

        foreach ($suppliers AS $supplier):

            Supplier::create($supplier);

        endforeach;
    }
}
