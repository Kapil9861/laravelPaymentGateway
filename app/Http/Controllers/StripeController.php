<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(){
        return view('payments.index');
    }
    public function checkout(){
        \Stripe\Stripe::setApiKey(config('stripe.sk'));
        $amount=request()->input('amount');
        $name=request()->input('product_name');
        try{
            $session=\Stripe\Checkout\Session::create([
                'line_items' =>[
                    [
                    'price_data' =>[
                        'currency' => 'AUD',
                        'product_data' =>[
                            'name' => $name,
                          ],
                            'unit_amount' =>$amount*100,
                         ],
                          'quantity' =>1,
                     ],
                    ],
                    'mode' => 'payment',
                    'success_url'=>route("success"),
                ]);
        }
        catch(Exception $e){
            return redirect()->route('designs')->with('error','Transaction Failed: '. $e->getMessage());
        }

    return redirect()->away($session->url);
    }
    public function success(){
        return view('payments.success');
    }
}
