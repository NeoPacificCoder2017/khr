<?php

use Illuminate\Database\Seeder;

class PaymentModeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++):
            $paymentmodes[] = [
                'name'=> $name = str_random(10),];
        endfor;
    
           foreach($paymentmodes AS $Payment):
                UserPaymentMode::create($Payment);
           endforeach;
    } 
}

