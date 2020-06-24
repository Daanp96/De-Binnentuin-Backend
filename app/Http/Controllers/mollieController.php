<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;

class mollieController extends Controller
{

  public function preparePayment()
    {
      $payment = Mollie::api()->payments->create([
          "amount" => [
              "currency" => "EUR",
              "value" => "10.00" // You must send the correct number of decimals, thus we enforce the use of strings
          ],
          "description" => "Order #12345",
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
