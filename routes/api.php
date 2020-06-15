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

Route::get('/bestellingen/{invoer}', 'BestellingenController@show');
Route::put('/bestellingen/{invoer}/update', 'BestellingenController@update');
Route::get('/users/{invoer}', 'UsersController@show');
