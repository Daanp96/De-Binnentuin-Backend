<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
  public function show(){
    $lowestTime = DB::table('timeslots')->orderBy('TimeStart', 'ASC')->get()->pluck('TimeStart')->first();
    $highestTime =  DB::table('timeslots')->orderBy('TimeStop', 'DESC')->get()->pluck('TimeStop')->first();
    return response()->json([$lowestTime, $highestTime]);
  }
}
