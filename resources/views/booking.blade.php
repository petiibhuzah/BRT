@extends('layouts.front')

@section('content')
    <div class="container-fluid">
        <div class="row bg-border-color medium-padding120">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">

                        <div class="cart">

                            <h3 class="cart-title">Booking Store: </h3>
                            <p class="heading-text">Number of Tickets:<span class="c-primary"> {{Cart::count()}} Tickets</span></p>
                            <p class="heading-text">Number of Source Destination Routes:<span class="c-primary"> {{Cart::content()->count()}} Different routes</span></p>
                            <p class="heading-text">Total Amount: <span class="c-primary">{{Cart::total()}}</span></p>
                        </div>

                        <form action="#" method="post" class="cart-main">

                            <table class="shop_table cart">
                                <thead class="cart-product-wrap-title-main">
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>

                               @foreach(Cart::content() as $sd)
                                   <tr class="cart_item">

                                       <td class="product-remove">
                                           <a href="{{route('booking.delete',['id'=>$sd->rowId])}}" class="product-del remove" title="Remove this item">
                                               <i class="seoicon-delete-bold"></i>
                                           </a>
                                       </td>

                                       <td class="product-price">
                                           <h6 class="price amount">Tsh. {{number_format($sd->price)}}</h6>
                                       </td>

                                       <td class="product-quantity">

                                           <div class="quantity">
                                               <a href="{{route('booking.decrement',['id'=>$sd->rowId,'qty'=>$sd->qty])}}" class="quantity-minus" >-</a>
                                               <input title="Qty" class="email input-text qty text" type="text" value="{{$sd->qty}}" placeholder="1" readonly>
                                               <a href="{{route('booking.increment',['id'=>$sd->rowId,'qty'=>$sd->qty])}}" class="quantity-plus">+</a>
                                           </div>

                                       </td>

                                       <td class="product-subtotal">
                                           <h6 class="total amount">Tsh. {{number_format($sd->total())}}</h6>
                                       </td>

                                   </tr>

                               @endforeach

                                </tbody>
                            </table>


                        </form>

                        <div class="cart-total">
                            <h3 class="cart-total-title">Booking  Totals</h3>
                            <h5 class="cart-total-total">Total: <span class="price">Tsh. {{Cart::total()}}</span></h5>
                            <a href="{{route('checkout.page')}}" class="btn btn-medium btn--light-green btn-hover-shadow">
                                <span class="text">Checkout</span>
                                <span class="semicircle"></span>
                            </a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection