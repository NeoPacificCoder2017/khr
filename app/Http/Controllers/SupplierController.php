<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Supplier;

class SupplierController extends Controller
{
    
    public function all() {
        $supplier = Supplier::all();
        return view('suppliers.suppliers',['suppliers' => $supplier]);
    }

    public function show() {
        $supplier = Supplier::find($supplierId);
        dump($supplier);
        return view('suppliers.supplier');
    }

    public function new() {
        return view('suppliers.supplier-form');
    }

    public function create() {
        $input = $request->all();

        $supplier = new suppliers();
        $supplier ->suppler_id = $input['supplier_id'];
        $supplier ->name = $input['name'];
        $supplier ->last_name = $inpute['last_name'];
        $supplier ->first_name = $inpute['first_name'];
        $supplier ->celphone = $inpute['celphone'];
        $message->save();

    }

    
}