<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\restaurant_menuitem;
use App\menuitem;
use App\Timeslots;
use App\restaurant;

class AdminController extends Controller
{
    public function getMenu($menu){
      $lijst = menuitem::
      join('restaurant_menuitem', 'restaurant_menuitem.menuitem_id', '=', 'menuitem.id')
      ->where('restaurant_menunumber','=', $menu)
      ->get();

      return response()->json($lijst);
    }

    public function getTimeslot(){
      $timeslots = Timeslots::all();
      return response()->json($timeslots);
      }

      public function test(){
        return view('welcome');
      }

    public function Restaurants($restaurant){
      $token = csrf_token();
      $info = Restaurant::where('name', '=', $restaurant)->first();
    //  $info = array_add($info, $token);
      return response()->json([$info, csrf_token()]);
      }

      public function UpdateRestaurant(Request $request){
        $open_close = Restaurant::where('name', '=', $request->name)->first();
        if($request->isOpen == '1'){
          $request->isOpen = true;
        }
        else{
          $request->isOpen = false;
        }
        Restaurant::where('name', '=', $request->name)->update(['isOpen' => $request->isOpen]);
        $open_close = Restaurant::where('name', '=', $request->name)->first();
        return $open_close;
        //$open_close->save();
      }
}
