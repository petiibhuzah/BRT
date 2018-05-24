<?php

namespace App\Http\Controllers;
use Session;
use App\Checkout;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function pay(){
        //dd(request()->all());
        Stripe::setApiKey("sk_test_Mmw7GMcQTEXpMjKYXF9znmvT");
        $token = request()->stripeToken  ;
        $charge = Charge::create([
            'amount' => Cart::total()*100,
            'currency' => 'TZS',
            'description' => 'BRT selling tickets ',
            'source' => $token,
        ]);
//        dd('successfully charged');
        $id ="CKBRT018".uniqid();

        $checkout = new Checkout();
        $checkout->token = $token;
        $checkout->unique_id = $id;
        $checkout->user_id = Auth::id();
        $checkout->amount = Cart::total()*100;
        $checkout->description = "BRT selling tickets";
        $checkout->save();
        Session::flash('success','Ticket Purchase Successfully.Check our Email in your inbox.');
        Cart::destroy();
        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful());
       return redirect()->route('QRcode');
    }
}
