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
      $optelSom = Bestellingen::where('user_id', '=', $invoer)->where('betaald', '=', false)->sum('bestellingen.prijsVoledigeBestelling'); // Hier word de totale prijs van een aantal bestellingen uit de database gehaald.

      $payment = Mollie::api()->payments->create([
          "amount" => [
              "currency" => "EUR",
              "value" => $optelSom // De prijs van de totale bestelling van een specifieke user word opehaald uit de database.
          ],
          "description" => "Betaling de Binnentuin",
          "redirectUrl" => 'https://webhook.site/e81932be-dd23-47aa-a442-56181b12029a', // Wanneer er iets fout gaat met de betaling word de klant naar deze URL geleid, in ons geval word er niet dadwerkelijk afgerekend dus hebben wij er een dummie URL neergezet.
          "webhookUrl" => 'https://webhook.site/e81932be-dd23-47aa-a442-56181b12029a', // Wanneer er is betaald word iemand naar deze pagina geleid, in ons geval word er niet dadwerkelijk afgerekend dus hebben wij er een dummie webhook neergezet.
          "metadata" => [
              "order_id" => "12345",
          ],
      ]);

      $payment = Mollie::api()->payments->get($payment->id);

      // redirect customer to Mollie checkout page
      return redirect($payment->getCheckoutUrl(), 303);


    }

    public function nuPayment(Request $request, $prijs)
      {

        // Hieronder staat de Mollie request wanneer iemand direct zijn/haar bestelling wil afrekenen.

        $payment = Mollie::api()->payments->create([
            "amount" => [
                "currency" => "EUR",
                "value" => $prijs // De prijs van de totale bestelling word meegegeven via de URL en word met $prijs doorgegeven aan de Mollie API
            ],
            "description" => "Betaling de Binnentuin",
            "redirectUrl" => 'https://webhook.site/e81932be-dd23-47aa-a442-56181b12029a', // Wanneer er iets fout gaat met de betaling word de klant naar deze URL geleid, in ons geval word er niet dadwerkelijk afgerekend dus hebben wij er een dummie URL neergezet.
            "webhookUrl" => 'https://webhook.site/e81932be-dd23-47aa-a442-56181b12029a', // Wanneer er is betaald word iemand naar deze pagina geleid, in ons geval word er niet dadwerkelijk afgerekend dus hebben wij er een dummie webhook neergezet.
            "metadata" => [
                "order_id" => "12345",
            ],
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
      }


}
