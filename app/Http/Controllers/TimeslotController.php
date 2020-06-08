<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Timeslot;

class TimeslotController extends Controller
{
    public function index(){
      $timeslots = Timeslot::all();
      return response()->json($timeslots);
    }
}
