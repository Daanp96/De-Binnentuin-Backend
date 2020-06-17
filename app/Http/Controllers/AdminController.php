<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\restaurant_menuitem;
use App\menuitem;
use App\Timeslots;
use App\restaurant;
use App\Bestelling;
use App\MenuItem_Bestellingen;

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
      $timeslots = Timeslots::orderBy('TimeStart')->get();
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

      public function indexMenuItem($itemNaam){
          $menuItem = menuitem::where('naam', '=', $itemNaam)->first();
          return response()->json($menuItem);
      }

      public function updateMenuItem(Request $request){
      //  return $request;

        menuitem::where('id', '=', $request->id)
        ->update(['naam' => $request->naam,
        'prijs' => $request->prijs,
        'beschrijving' => $request->beschrijving,
        'chefSpecial' => $request->special,
         'categorie' => $request->categorie]);
      }

      public function updateTimeslots(Request $request){

      //loopt door alle Requests en doet het in variablen die we kunnen aanroepen
        $timestarts = [];
        foreach($request->timestart as $key=>$val){
          array_push($timestarts, $val);
        }
        $timestops = [];
        foreach($request->timestop as $key=>$val){
          array_push($timestops, $val);
        }
        //update de benodigde eerste timeslot
        timeslots::where('id', '=', 1)->update([
          'TimeStart' => $timestarts[0],
          'TimeStop' => $timestops[0],
        ]);
        //delete de andere timeslots
        timeslots::where('id', '!=', 1)->delete();
        
        for($i = 1; $i < count($timestarts); $i++){
          $newTimeslot = new Timeslots();
          $newTimeslot->TimeStart = $timestarts[$i];
          $newTimeslot->TimeStop = $timestops[$i];
          $newTimeslot->save();
        }
      }

      public function showBestellingen(){
        $bestellingen = Bestelling::join('menuitem_bestellingen', 'menuitem_bestellingen.bestellingen_id', '=', 'bestellingen.id')
        ->leftjoin('menuitem', 'menuitem.id', '=', 'menuItem_Bestellingen.menuitem_id')
        ->leftjoin('tafel_timeslots', 'tafel_timeslots.id', '=', 'bestellingen.tafeltimeslots_id')
        ->leftjoin('timeslots', 'timeslots.id', '=', 'tafel_timeslots.timeslots_id')
        ->select('bestellingen.id', 'timeslots.TimeStart', 'timeslots.TimeStop', Bestelling::raw("(GROUP_CONCAT(menuitem.naam SEPARATOR ',')) as 'items'"), Bestelling::raw("(GROUP_CONCAT(menuItem_Bestellingen.aantal SEPARATOR ',')) as 'aantal'"))
        ->groupBy('bestellingen.id')
        ->orderBy('timeslots.TimeStart')
        ->get();
        return response()->json($bestellingen);
      }
}
