<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Restaurant;

class restaurantController extends Controller
{
    public function getInfo($restaurant){
      $info = Restaurant::where('name', '=', $restaurant)->first();
      return response()->json($info);
    }

    public function UpdateRestaurant(Request $request, $restaurant){
      $open_close = Restaurant::where('name', '=', $restaurant)->first();
      $open_close->update($request->all());
    }
}
