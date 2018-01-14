<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Cart;

class CartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carts = [];

        for($i = 0; $i < 10; $i++):
            $userId = rand(1, 10);
            $total = rand(0, 100000);
            $userPaymentMode = rand(1, 6);
            $shippingAddress_id = rand(1, 15);
            $billingAddress_id = rand(1, 15);

            $carts[] = [   
                'user_id' => $userID,
                'total' => $total,
                'UserPaymentMode_id' => $userPaymentMode,
                'shippingAddress_id' => $shippingAddress_id,
                'billingAddress_id' => $billingAddress_id,
            ];
        endfor;

        foreach($carts AS $cart):

            Message::create($cart);
        endforeach;
    }
}
