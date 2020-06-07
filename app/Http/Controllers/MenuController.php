<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
  public function show($menu, $submenu){
    if($submenu = 'all'){
    $menulist =  DB::table('restaurant_menuitem')->find('menuitem_id')->get();
    }else{
    $menulist =  DB::table('restaurant_menuitem')->find('menuitem_id')->where('submenu','=', $submenu)->get();
    }
    $menuitems = DB::table('menuitem')->where('id','=',$menulist)->get();
    return response()->json($menuitems);
  }
}
