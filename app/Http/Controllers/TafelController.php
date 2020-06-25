<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tafel;

class TafelController extends Controller
{
    public function RestaurantIndex($restaurant){
      return tafel::where("restaurant_naam","=",$restaurant)->get();
    }
}
