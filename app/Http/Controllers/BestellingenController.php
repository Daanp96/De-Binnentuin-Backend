<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bestellingen;

class BestellingenController extends Controller
{
    public function show($invoer){
      $opmerking = Bestellingen::where('user_id', '=', $invoer)->first();
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
