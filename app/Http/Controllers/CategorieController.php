<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategorieController extends Controller
{
    public function all(){

        return categories::all();

    }



}
