<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Island;

class IslandController extends Controller
{
    public function all() {
        $islands = Island::all();
        dump($islands);

        
    }
}
