<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('addresses', 'AddressController@all');
Route::post('addresses', 'AddressController@create');
Route::get('addresses/new', 'AddressController@new');

Route::get('addresses/{addressId}', 'AddressController@show'); // $addressID est récupérer dans le controleur

// Route::get('addresses/{addressId}/edit',  'addressController@edit');//->with('addressId', $addressId);


