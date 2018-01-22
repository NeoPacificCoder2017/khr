<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function all(){
        $addresses = Address::all();
        // dd($address);
        return view('addresses.addresses',['addresses' => $addresses]);
    }

    public function show($addressId){
        $address = Address::find($addressId);
        // dd($address);
        return view('addresses.address',['address' => $address]);
    }

    public function new(){ 
        return view('addresses.address-form');
    }

     public function create(Request $request){ 
        $input = $request->all();

        $address = new Address();
        $address->user_id = $input['user_id'];
        $address->shipping = $input['shipping'];
        $address->billing = $input['billing'];
        $address->firstname = $input['firstname'];
        $address->lastname = $input['lastname'];
        $address->company_name = $input['company_name'];
        $address->address_line_1 = $input['address_line_1'];
        $address->address_line_2 = $input['address_line_2'];
        $address->island_id = $input['island_id'];
        $address->city_id = $input['city_id'];
        $address->telephone = $input['telephone'];
        $address->email = $input['email'];

        $address->save();
    }

    public function edit($addressId){
        $address = Address::find($addressId);
        // dd($address);
        return view('addresses.address-form',['address' => $address]);
    }

}
