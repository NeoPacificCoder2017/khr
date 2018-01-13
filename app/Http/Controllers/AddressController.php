<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

class AddressController extends Controller
{
    public function all(){

        $addresses = Address::all(); //on appelle le model Address avec la methode all()
        // dump($addresses);
        return view('addresses.addresses');
    }

    public function show($addressId){ // $addresseID est recuperer dans la route
        $address = Address::find($addressId);
        // dump($addresse);
        return view('addresses.address');
    }

    public function new(){ // on creer d'abord une fonction new avant de creer la fonction create
        return view('addresses.address-form');
    }

     public function create(Request $request){ // recuperer les valeurs d'un formulaire
        $input = $request->all();

        $address = new Address();
        $address->user_id = $input['user_id'];
        $address->user_id = $input['shipping'];
        $address->user_id = $input['billing'];
        $address->user_id = $input['firstname'];
        $address->user_id = $input['lastname'];
        $address->user_id = $input['company name'];
        $address->user_id = $input['address_line_1'];
        $address->user_id = $input['address_line_2'];
        $address->user_id = $input['island_id'];
        $address->user_id = $input['city_id'];
        $address->user_id = $input['telephone'];
        $address->user_id = $input['email'];

        $address->save();// sauvegarde dans la base de donnée

        Address::create($addresse);// on reprend ce qu'il y avait dans AddressTableSeeder.php

    }
}
