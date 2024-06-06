<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(){
        return view('payments.index');
    }
    public function checkout(){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
$session=\Stripe\Checkout\Session::create([
    'line_items' =>[
        [
        'price_data' =>[
            'currency' => 'USD',
            'product_data' =>[
                'name' => 'Purchase Item!',
              ],
                'unit_amount' =>5000,
             ],
              'quantity' =>1,
         ],
        ],
        'mode' => 'payment',
        'success_url'=>route("success"),
        'cancel_url'=>route('index'),
    ]);
    return redirect()->away($session->url);
    }
    public function success(){
        return view('payments.success');
    }
}
