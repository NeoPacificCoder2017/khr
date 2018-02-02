<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    public function listAllTheProducts()
    {
        $products = DB::table('products')->simplePaginate(15);
        return view('products.products',['products'=>$products]);
    }

    public function show($productId)
    {
        $product = Product::find($productId);
        dump($product);
        return view('products.product',['product'=>$product]);
    }
}
