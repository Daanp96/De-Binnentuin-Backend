<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
  public function show(){
    $lowestTime = DB::table('timeslots')->orderBy('TimeStart', 'ASC')->get()->pluck('TimeStart')->first();
    $lowestTime = substr($lowestTime, 0,5);
    $highestTime =  DB::table('timeslots')->orderBy('TimeStop', 'DESC')->get()->pluck('TimeStop')->first();
    $highestTime =substr($highestTime, 0,5);
    $open1 = DB::table('restaurant')->orderBy('name', 'ASC')->get()->pluck('isOpen')->first();
    if($open1 == 1){
      $open1 = true;
    }else{
      $open1 = false;
    }
    $open2 = DB::table('restaurant')->orderBy('name', 'DESC')->get()->pluck('isOpen')->first();
    if($open2 == 1){
      $open2 = true;
    }else{
      $open2 = false;
    }
    return response()->json([$lowestTime, $highestTime, $open1, $open2]);
  }
}
