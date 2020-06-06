<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\MenuItemBestellingModel;

class adminController extends Controller
{
    public function getOrder()
    {
      $link = MenuItemBestellingModel::where('Bestelling_id', '=', '1')->get();
      return response()->json($link);
      //return $link;
    }
}
