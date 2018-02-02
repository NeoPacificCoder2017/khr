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

Route::get('products','ProductController@listAllTheProducts');

Route::post('products', 'ProductController@store');
Route::get('product/new', 'ProductController@create');

Route::get('product/{productId}/edit', 'ProductController@edit');
Route::patch('product/{productId}/edit', 'ProductController@update');

Route::get('product/{productId}', 'ProductController@show');