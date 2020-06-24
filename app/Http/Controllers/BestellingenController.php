<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bestellingen;

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
}
