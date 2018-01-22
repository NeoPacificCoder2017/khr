<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suppliers;

class SupplierController extends Controller
{
    
    public function all() {
        $supplier = suppliers::all();

        dump($supplier);
        return view('suppliers.suppliers');
    }

    public function show() {
        $supplier = suppliers::find($supplierId);
        dump($supplier);
        return view('suppliers.supplier');
    }

    public function new() {
        return view('suppliers.supplier-form');
    }

    public function create() {
        $input = $request->all();

        $supplier = new Suppliers();
        $supplier ->suppler_id = $input['supplier_id'];
        $supplier ->name = $input['name'];
        $supplier ->last_name = $inpute['last_name'];
        $supplier ->first_name = $inpute['first_name'];
        $supplier ->celphone = $inpute['celphone'];
        $message->save();

    }

    
}