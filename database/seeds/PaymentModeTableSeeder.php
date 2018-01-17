<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\PaymentMode;

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
          $userID = rand(1, 10);

          $paymentmode[] = [
              'user_id'=>$userID,
              'name'=> str_random(5),];
      endfor;
  
      foreach($paymentmode AS $Payment):
          PaymentMode::create($Payment);
      endforeach;
    }
}

