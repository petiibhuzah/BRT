<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use LaravelQRCode\Facades\QRCode;

class QRcodeController extends Controller
{
    public function QRcode(){

        $uda =md5("UDA");
        $id = Auth::id();
        return view('ticket')->with('uda',$uda)
                                  ->with('booking_count',Booking::where('user_id',$id)->count())
                                  ->with('checkout_count',Checkout::where('user_id',$id)->count())
                                  ->with('amount',Checkout::where('user_id',$id)->sum('amount'));
    }
}
