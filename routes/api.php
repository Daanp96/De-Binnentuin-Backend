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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('menu', 'MenuitemController@index');

Route::get('menu/{restaurant}/categories', 'MenuitemController@showCategories');

Route::get('menu/{restaurant}/{all}', 'MenuitemController@show');

Route::get('/admin/menuitem/{item}', 'AdminController@indexMenuItem');
Route::put('/admin/menuitem/update', 'AdminController@updateMenuItem');
Route::post('/admin/menuitem/create', 'AdminController@createMenuItem');
Route::delete('/admin/restaurant_item/delete', 'AdminController@deleteRestaurantItem');
