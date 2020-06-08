<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\restaurant_menuitem;
use App\menuitem;

class AdminController extends Controller
{
    public function getMenu($menu){
      $lijst = menuitem::
      join('restaurant_menuitem', 'restaurant_menuitem.menuitem_id', '=', 'menuitem.id')
      ->where('restaurant_menunumber','=', $menu)
      ->get();

      return response()->json($lijst);

    }
}
