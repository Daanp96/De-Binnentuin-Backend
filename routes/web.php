<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/menu/{submenu}', 'MenuController@show');
Route::get('/test', 'AdminController@test');

Route::get('/admin/timeslots', 'AdminController@getTimeslot');
Route::put('/admin/timeslots/update', 'AdminController@updateTimeslots');

Route::get('/admin/menuitem/{item}', 'AdminController@indexMenuItem');
Route::put('/admin/menuitem/update', 'AdminController@updateMenuItem');

Route::get('/admin/menuedit, AdminController@showItem');

Route::get('/admin/menu/{menunumber}', 'AdminController@getMenu');

Route::get('/admin/{restaurant}', 'AdminController@Restaurants');
//Route::patch('/admin/change', 'AdminController@UpdateRestaurant');
Route::put('/admin/change', 'AdminController@UpdateRestaurant');
//Route::put('/admin/change', array('middleware'=> 'cors', 'uses' => 'AdminController@UpdateRestaurant'));
