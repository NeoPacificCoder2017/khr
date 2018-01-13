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
Route::post('addresses', 'AddressController@create'); // $addressID est récupérer dans le controleur
Route::get('addresses/new', 'AddressController@new'); // $addressID est récupérer dans le controleur
Route::get('addresses/{addressId}', 'addressController@show'); // $addressID est récupérer dans le controleur