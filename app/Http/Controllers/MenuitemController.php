<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menuitem;

class MenuitemController extends Controller
{
    public function show($restaurant, $submenu){

        if($submenu == 'all'){
            $menulist =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where("restaurant_menunumber","=", $restaurant)->groupBy('menuitem_id')->get();
        }else{
            $menulist =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['categorie','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->get();
        }
        // $menulist = $menulist->groupBy('menuitem_id');
        return response()->json($menulist);
    }

    public function index(){
        return Menuitem::all();
    }
}
