<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Menuitem;

class MenuitemController extends Controller
{

    public function show($restaurant, $submenu){
        if($submenu == 'All'){
            $menuList =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where("restaurant_menunumber","=", $restaurant)->groupBy('menuitem_id')->get();
        }else if($submenu == 'Chefs special') {
          $menuList =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['chefSpecial','=', 1], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->get();
        }else if($submenu == 'Best selling') {
          $menuList =  [DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where("restaurant_menunumber","=", $restaurant)->orderBy('aantalVerkocht', 'ASC')->first()];
        }else{
            $menuList =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->get();
        }
        // $menulist = $menulist->groupBy('menuitem_id');
        return response()->json($menuList);
    }

    public function showCategories($restaurant){
        $categoryList =  DB::table('menuitem')->leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where("restaurant_menunumber","=", $restaurant)->groupBy('submenu')->get()->pluck('submenu');
      return response()->json($categoryList);
    }

    public function index(){
        return Menuitem::all();
    }

    public function sort($sort, $restaurant, $submenu){
      if($sort === "alphabetical"){
        return Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy("menuitem_id")->orderBy("naam")->get();

      } else if($sort === "reverse"){
        return Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->orderBy("naam", "desc")->get();

      } else if($sort === "high_to_low"){
        return Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->orderBy("prijs")->get();

      } else if($sort === "low_to_high"){
        return Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->orderBy("prijs", "desc")->get();

      } else if($sort === "default"){
        return Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id')->get();
      }
      
      return Menuitem::all();
    }
}
