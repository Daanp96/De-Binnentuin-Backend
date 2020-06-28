<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('menu', 'MenuitemController@index');

Route::get('menu/{restaurant}/categories', 'MenuitemController@showCategories');
Route::get('menu/{restaurant}/{all}', 'MenuitemController@show');
Route::get('admin/kok', 'AdminController@showBestellingen');
Route::put('admin/kok/update', 'AdminController@updateBestelling');

Route::get('/admin/menuitem/{item}', 'AdminController@indexMenuItem');
Route::put('/admin/menuitem/update', 'AdminController@updateMenuItem');
Route::post('/admin/menuitem/create', 'AdminController@createMenuItem');
Route::delete('/admin/restaurant_item/delete', 'AdminController@deleteRestaurantItem');

//Routes voor timeslots
Route::get('/admin/timeslots', 'AdminController@getTimeslot');
Route::put('/admin/timeslots/update', 'AdminController@updateTimeslots');

//Route restaurant tijden
Route::get('/admin/{restaurant}', 'AdminController@Restaurants');
Route::put('/admin/change', 'AdminController@UpdateRestaurant');

//Routes voor de koks schermen
Route::get('admin/kok', 'AdminController@showBestellingen');
Route::put('admin/kok/update', 'AdminController@updateBestelling');

Route::get('/bestellingen/{invoer}/payment', 'mollieController@preparePayment');

//Login
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

Route::get('/landing', 'LandingController@show');

//alle {invoer} hier staat voor het id dat je wilt gebruiken
//dus al wil je de eerste bestelling pak je /bestellingen/1
//en /users/1 voor de eerste user
Route::get('/bestellingen/{invoer}', 'BestellingenController@show');
Route::get('/bestellingen/{invoer}/laatsteBestellingen', 'BestellingenController@lastOrders');
Route::put('/bestellingen/{invoer}/update', 'BestellingenController@update');
Route::get('/users/{invoer}', 'UsersController@show');
Route::put('/users/{invoer}/update', 'UsersController@update');
Route::get('/bestellingen/{invoer}/rekening', 'BestellingenController@sumUp');
//Route::put('/bestellingen/new', 'BestellingenController@store');
//moet een put worden is voor de bestellingen
Route::post('/bestellingen/new/{betaald}', 'BestellingenController@inputBestellling');

//User story 12
Route::get("/{restaurant}/tafels", "TafelController@RestaurantIndex");

Route::get("/timeslots", "TimeslotsController@index");

Route::get("/timeslots/tafel/{tafel}/{day}/{month}/{year}","TafelTimeslotsController@Show");
