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

    // Returned alle items
    public function index(){
        return Menuitem::all();
    }

    // Geeft op basis van de sorteer optie, restaurant en submenu een gesorteerde itemList terug.
    public function sort($sort, $restaurant, $submenu){

      // Kijkt naar in welke categorie je je bevindt.
      if($submenu === "All"){
        $menuitem = Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where("restaurant_menunumber","=", $restaurant)->groupBy("menuitem_id");

      } else if($submenu === "Chefs special") {
        $menuitem = Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['chefSpecial','=', 1], ["restaurant_menunumber","=", $restaurant]])->groupBy('menuitem_id');

      } else if ($submenu === "Best selling") {
        return [Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where("restaurant_menunumber","=", $restaurant)->orderBy('aantalVerkocht', 'ASC')->first()];

      } else {
        $menuitem = Menuitem::leftJoin('restaurant_menuitem', 'restaurant_menuitem.menuitem_id','=','menuitem.id')->where([['submenu','=', $submenu], ["restaurant_menunumber","=", $restaurant]])->groupBy("menuitem_id");

      }

      // Alle sorteeropties
      if($sort === "alphabetical"){
        $menuitem = $menuitem->orderBy("naam")->get();

      } else if($sort === "reverse"){
        $menuitem = $menuitem->orderBy("naam", "desc")->get();

      } else if($sort === "high_to_low"){
        $menuitem = $menuitem->orderBy("prijs", "desc")->get();

      } else if($sort === "low_to_high"){
        $menuitem = $menuitem->orderBy("prijs")->get();

      } else if($sort === "default"){
        $menuitem = $menuitem->get();
      }

      return $menuitem;

    }
}
