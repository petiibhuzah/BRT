@extends('layouts.front')

@section('content')
    <div class="container" >
        <div class="row medium-padding120">
            <div class="product-details">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <div class="product-details-thumb">
                        <div class="swiper-container" data-effect="fade">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="product-details-img-wrap swiper-slide">
                                    <img src="{{asset($source_destination->image)}}" alt="{{$source_destination->source_destination_name}}" data-swiper-parallax="-10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-lg-offset-1 col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="product-details-info">
                        <div class="product-details-info-price">Tsh.{{$source_destination->price}}</div>
                        <h3 class="product-details-info-title">{{$source_destination->source_destination_name}}</h3>
                        <p class="product-details-info-text">{{$source_destination->description}}
                        </p>

                        <form action="{{route('book.add')}}" method="POST">
                            {{csrf_field()}}
                            <div class="quantity">
                            <a href="#" class="quantity-minus quantity-minus-d">-</a>
                            <input title="Qty" class="email input-text qty text" name="qty" type="text" value="2">
                            <a href="#" class="quantity-plus quantity-plus-d">+</a>
                            </div>
                            <input type="hidden" name="sd_id" value="{{$source_destination->id}}">

                            <button class="btn btn-medium btn--primary">
                            <span class="text">Book The Ticket</span>
                            <span class="semicircle"></span>
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection