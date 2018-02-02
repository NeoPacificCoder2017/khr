<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Product::class, 5)->create();
        $products = [
            [
                'name'=>'Poire',
                'image'=>'1517605685.poire.jpg',
                'supplier_id'=>1,
                'supplier_order_id'=>1,
                'product_category_id'=>1,
                'quantity'=>10,
                'price'=>1500
            ],
            [
                'name'=>'Pomelo',
                'image'=>'1517605700.pomelo.jpg',
                'supplier_id'=>1,
                'supplier_order_id'=>1,
                'product_category_id'=>1,
                'quantity'=>100,
                'price'=>15000
            ],
            [
                'name'=>'Salade',
                'image'=>'1517605712.salades.jpg',
                'supplier_id'=>1,
                'supplier_order_id'=>1,
                'product_category_id'=>1,
                'quantity'=>10,
                'price'=>19000
            ],
            [
                'name'=>'Rutabaga',
                'image'=>'1517605729.rutabaga.jpg',
                'supplier_id'=>1,
                'supplier_order_id'=>1,
                'product_category_id'=>1,
                'quantity'=>100,
                'price'=>150000
            ],
            [
                'name'=>'Orange',
                'image'=>'1517605743.orange.jpg',
                'supplier_id'=>1,
                'supplier_order_id'=>1,
                'product_category_id'=>1,
                'quantity'=>10,
                'price'=>20000
            ],
           
        ];

        foreach($products as $product):
            Product::create($product);
        endforeach;
    }
}
