<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
  public function show($submenu){

    if($submenu == 'all'){
      $menulist =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->groupBy('menuitem_id')->get();
    }else{
      $menulist =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where('submenu','=', $submenu)->groupBy('menuitem_id')->get();
    }
    $menulist = $menulist->groupBy('menuitem_id');
    return response()->json($menulist);
  }
}
