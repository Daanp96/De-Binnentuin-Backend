<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeslots;

class TimeslotsController extends Controller
{
    public function index(){
      return Timeslots::all();
    }
}
