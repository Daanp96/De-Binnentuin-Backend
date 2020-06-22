<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//alle {invoer} hier staat voor het id dat je wilt gebruiken
//dus al wil je de eerste bestelling pak je /bestellingen/1
//en /users/1 voor de eerste user
Route::get('/bestellingen/{invoer}', 'BestellingenController@show');
Route::put('/bestellingen/{invoer}/update', 'BestellingenController@update');
Route::get('/users/{invoer}', 'UsersController@show');
Route::put('/users/{invoer}/update', 'UsersController@update');
