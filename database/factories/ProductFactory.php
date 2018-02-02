<?php

use Faker\Generator as Faker;
use App\Product;


$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => str_random(10),
        'image' => str_random(19).'.jpg',
        'supplier_id' => $faker->numberBetween(1,10),
        'supplier_order_id' => $faker->numberBetween(1,10),
        'product_category_id' => $faker->numberBetween(1,10),
        'quantity' => $faker->numberBetween(1,10),
        'price' => $faker->numberBetween(1500,5000),
    ];
});