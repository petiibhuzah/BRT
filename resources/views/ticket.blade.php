@extends('layouts.ticket')

@section('content')

    <div class="container-fluid">
        <div class="row medium-padding120 bg-border-color">
            <div class="container">

                <div class="row">
                    <h5 class="order-title align-center"></h5>
                    <div class="col-lg-12">
                        <div class="order">
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($uda))!!}" alt="Hii">
                            {{--<h3 class="h3 order-title align-center " style="color: #4CC2C0;"><a href="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(300)->generate($uda))!!}">Click Here To Download The Ticket</a></h3>--}}
                            <div class="cart-main">
                                <table class="shop_table cart">
                                    <thead class="cart-product-wrap-title-main">
                                    <tr>
                                        <th class="product-thumbnail">Total No. Bookings</th>
                                        <th class="product-quantity">Total No. Tickets</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">

                                            <td class="product-thumbnail">

                                                <div class="cart-product__item">
                                                    <div class="cart-product-content">
                                                        <h5 class="cart-product-title">{{$booking_count }} Bookings</h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td class="product-quantity">
                                                <h5 class="cart-product-title">{{$checkout_count }} Checkouts</h5>

                                                <div class="quantity">

                                                </div>

                                            </td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection