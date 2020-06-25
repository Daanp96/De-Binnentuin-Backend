<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/bestellingen/{invoer}/payment', 'mollieController@preparePayment');

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});

//alle {invoer} hier staat voor het id dat je wilt gebruiken
//dus al wil je de eerste bestelling pak je /bestellingen/1
//en /users/1 voor de eerste user
Route::get('/bestellingen/{invoer}', 'BestellingenController@show');
Route::get('/bestellingen/{invoer}/laatsteBestellingen', 'BestellingenController@lastOrders');
Route::put('/bestellingen/{invoer}/update', 'BestellingenController@update');
Route::get('/users/{invoer}', 'UsersController@show');
Route::put('/users/{invoer}/update', 'UsersController@update');
Route::get('/bestellingen/{invoer}/rekening', 'BestellingenController@sumUp');
