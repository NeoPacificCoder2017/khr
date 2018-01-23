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
        
                $categorie = new Categories();

                    $categorie->nom = $input['nom'];
                    $categorie->parent_id = $input['categorie'];
                

                $categorie->save();

                return "l'enregistrement de ".request('nom').' est réussit';
               
    }

    public function show($categoriesId){


        $categorie = Categories::find($categoriesId);
        dump($categorie);
        return view('categories');
    }

        



}
