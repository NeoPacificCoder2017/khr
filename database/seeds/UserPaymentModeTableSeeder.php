<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\UserPaymentMode;

class UserPaymentModeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 0; $i < 10; $i++):
        $userID = rand(1, 10);
        $paymentModeId = rand(1, 4);

        $UserPaymentMode[] = [
            'user_id'=> $userID,
            'payment_mode_id'=>$paymentModeId,];
       endfor;

       foreach($UserPaymentMode AS $UserPayment):
            UserPaymentMode::create($UserPayment);
       endforeach;
    }
}
