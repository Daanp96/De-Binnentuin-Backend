<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bestellingen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BestellingenController extends Controller
{
    //hier haal ik de bestelling op die gelijk staat aan de {invoer} in de route
    public function show($invoer){
      $opmerking = Bestellingen::where('user_id', '=', $invoer)->first();
      return $opmerking;
    }

    public function lastOrders($invoer){
      $opmerking = Bestellingen::where('user_id', '=', $invoer)->take(5)->get();
      return $opmerking;
    }

    public function update(Request $request, $invoer){
      Bestellingen::where('user_id', '=', $invoer)->update(
        [
          "opmerking" => $request->opmerking,
        ]
      );
    }

    public function sumUp($invoer){
      $optelSom = Bestellingen::where('user_id', '=', $invoer)->where('betaald', '=', false)->sum('bestellingen.prijsVoledigeBestelling');

      return $optelSom;
    }

    public function store(Request $request){
      Bestellingen::new([
        "shoppingcart" => $request->shoppingcart,
      ]);
    }

    //plaats nieuwe bestelling in de database
    public function inputBestellling(Request $request, $betaald){
      $user = Auth::id();
      //&& Auth::user == null
      if($betaald == "true" && $user == null){
        $last = Bestellingen::insertGetId(["user_id" => "1", "betaald" => 1,"tafeltimeslots_id" => 1, "prijsVoledigeBestelling" => 5, "hoeveelMensen" => 0]);
      }else if($betaald == "true" && $user != null){
        $last = Bestellingen::insertGetId(["user_id" => $user,"betaald" => 1,"tafeltimeslots_id" => 1, "prijsVoledigeBestelling" => 5, "hoeveelMensen" => 0]);
      }else{
        $last = Bestellingen::insertGetId(["user_id" => $user,"betaald" => 0,"tafeltimeslots_id" => 1, "prijsVoledigeBestelling" => 5, "hoeveelMensen" => 0]);
      }

      //generic values
      $shoppingcart = collect([["id" => 10],["id" => 10],["id" => 20],["id" => 10]]);
      $keyvalueArray = collect([]);
      $shoppingcart->mapWithKeys(function ($cart) use($keyvalueArray, $last){

      //stop de cart in de keyvalueArray en fix het aantal
        if($keyvalueArray->isNotEmpty()){
            if($keyvalueArray->contains('menuitem_id', $cart["id"])){
              $input = $keyvalueArray->where("menuitem_id", $cart["id"])->pluck('aantal')->first() + 1;
              $keyvalueArray->forget($keyvalueArray->search(function($item, $key) use($cart){
                return $item["menuitem_id"] == $cart["id"];
              }));
              $keyvalueArray->push(["bestellingen_id" => $last, "menuitem_id" => $cart["id"], "aantal"=> $input]);
            }else{
              $keyvalueArray->push(["bestellingen_id" => $last, "menuitem_id" => $cart["id"], "aantal"=> 1]);
            }
          }else{
          $keyvalueArray->push(["bestellingen_id" => $last, "menuitem_id" => $cart["id"], "aantal"=> 1]);
        }
      return $keyvalueArray;
      });
      DB::table("MenuItem_Bestellingen")->insert($keyvalueArray->toArray());
    }
}
