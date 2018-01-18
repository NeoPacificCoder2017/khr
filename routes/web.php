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

Route::get('paymentmodes', 'PaymentModeController@all');

Route::get('paymentmodes/new', 'PaymentModeController@new');

Route::get('paymentmode/{paymentmodeId}', 'PaymentModeController@show');

Route::post('paymentmode', 'PaymentModeController@create');

Route::delete('paymentmodes/{paymentmodeId}', 'PaymentModeController@destroy');