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
            $usermodes[] = [
                'user_id'=> $userID = rand(1, 10),
                'payment_mode_id'=> $paymentModeId = rand(1, 4),];
           endfor;
    
           foreach($usermodes AS $userPayment):
                UserPaymentMode::create($userPayment);
           endforeach;
        }
}
