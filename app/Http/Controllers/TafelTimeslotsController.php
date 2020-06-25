<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TafelTimeslots;

class TafelTimeslotsController extends Controller
{
    public function show($tafel_id, $day, $month, $year){
      // return TafelTimeslots::where([["tafel_id","=",$tafel_id],["Date","=",$date]])->get();

      return TafelTimeslots::whereYear("Date","=",$year)
      ->whereMonth("Date","=",$month)
      ->whereDay("Date","=",$day)
      ->where("tafel_id","=",$tafel_id)->get();
    }
}
