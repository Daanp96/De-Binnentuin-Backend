<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class UsersController extends Controller
{
  //ik heb haal heir de user op die het id heeft van de {invoer} van de route
  public function show($invoer){
    $opmerking = users::where('i_d', '=', $invoer)->first();
    return $opmerking;
  }

  public function update(Request $request, $invoer){
    users::where('i_d', '=', $invoer)->update(
      [
        "rekeningNummer" => $request->prijs,
      ]
    );
  }
}
