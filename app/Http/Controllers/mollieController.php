<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Auth;
use App\Bestellingen;

class mollieController extends Controller
{

  public function preparePayment()
    {
      $invoer = Auth::user;
      $optelSom = Bestellingen::where('user_id', '=', $invoer)->where('betaald', '=', false)->sum('bestellingen.prijsVoledigeBestelling');

      $payment = Mollie::api()->payments->create([
          "amount" => [
              "currency" => "EUR",
              "value" => $optelSom // You must send the correct number of decimals, thus we enforce the use of strings
          ],
          "description" => "Betaling de Binnentuin",
          "redirectUrl" => 'https://webhook.site/e81932be-dd23-47aa-a442-56181b12029a',
          "webhookUrl" => 'https://webhook.site/e81932be-dd23-47aa-a442-56181b12029a',
          "metadata" => [
              "order_id" => "12345",
          ],
      ]);

      $payment = Mollie::api()->payments->get($payment->id);

      // redirect customer to Mollie checkout page
      return redirect($payment->getCheckoutUrl(), 303);


    }


}
