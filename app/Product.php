<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['price','quantity','product_category_id','supplier_order_id','supplier_id','image','name','price'];
}
