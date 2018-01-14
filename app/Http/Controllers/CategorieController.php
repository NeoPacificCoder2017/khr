<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategorieController extends Controller
{
    public function all(){

        return categories::all();

    }

    public function create(Request $request){
        
                $input = $request->all();
                dump($input);
        
                $categorie = new Categories();

                    $categorie->nom = $input['nom'];
                    $categorie->parent_id = $input['categorie'];
                

                $categorie->save();

                return "l'enregistrement de ".request('nom').' est réussit';
               
            }
        



}
