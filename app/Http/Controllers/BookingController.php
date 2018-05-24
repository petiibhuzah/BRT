<?php

namespace App\Http\Controllers;
use App\Booking;
use Session;
use App\Source_Destination;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addBooking(){
//        dd(request()->all());
       $source_destination = Source_Destination::find(request()->sd_id);

       $cart =Cart::add([
           'id'=>$source_destination->id,
           'name'=>$source_destination->source_destination_name,
           'qty'=>request()->qty,
           'price'=>$source_destination->price
       ]);
//       dd(Cart::content());
        $id = "BK018".uniqid();
        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->route = $source_destination->source_destination_name;
        $booking->unique_id = $id;
        $booking->qty = request()->qty;
        $booking->price = Cart::total();;
        $booking->save();
        Cart::associate($cart->rowId,'App\Source_Destination');
        Session::flash('success','Ticket booked');
        return redirect()->route('booking');
    }
    public function book(){
//        Cart::destroy();
        return view('booking');
    }
    public function delete($id){
        Cart::remove($id);
        Session::flash('success','Ticket Book removed from th store');
        return redirect()->back();
    }
    public function increment($id,$qty){
     Cart::update($id,$qty + 1);
        Session::flash('success','Number fo tickets booked updated');
      return redirect()->back();
    }
    public function decrement($id,$qty){
        Cart::update($id,$qty -1);
        Session::flash('success','Number fo tickets booked updated');
        return redirect()->back();
    }
    public function rapid_add($id){
        $source_destination = Source_Destination::find($id);

        $cart =Cart::add([
            'id'=>$source_destination->id,
            'name'=>$source_destination->source_destination_name,
            'qty'=>1,
            'price'=>$source_destination->price
        ]);
        $id = "BK018".uniqid();
        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->route = $source_destination->source_destination_name;
        $booking->unique_id = $id;
        $booking->qty = 1;
        $booking->price = $source_destination->price;
        $booking->save();
        Cart::associate($cart->rowId,'App\Source_Destination');
        Session::flash('success','Ticket booked (But only single Route)');
        return redirect()->route('booking');
    }
    public function checkout(){
        if (Cart::content()->count() == 0){
            Session::flash('info','your booking store is empty please do some booking');
            return redirect()->back();
        }
        return view('checkout');
    }

}
