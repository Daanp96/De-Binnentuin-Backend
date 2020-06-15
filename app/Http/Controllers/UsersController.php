<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class UsersController extends Controller
{
  public function show($invoer){
    $opmerking = users::where('i_d', '=', $invoer)->first();
    return $opmerking;
  }
}
