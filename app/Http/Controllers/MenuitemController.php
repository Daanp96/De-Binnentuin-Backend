<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menuitem;

class MenuitemController extends Controller
{
    public function show($submenu){

        if($submenu == 'all'){
            $menulist =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->groupBy('menuitem_id')->get();
        }else{
            $menulist =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where('submenu','=', $submenu)->groupBy('menuitem_id')->get();
        }
        // $menulist = $menulist->groupBy('menuitem_id');
        return response()->json($menulist);
    }

    public function getItems(){
        return Menuitem::all();
    }
}
