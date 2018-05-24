@extends('layouts.front')

@section('content')
    <div class="content-wrapper">

        <div class="container">
            <div class="row pt120">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="heading align-center mb60">
                        <h4 class="h1 heading-title visible-md">BRT Booking System</h4>
                        <p class="heading-text">Book ,Pay Online, get your  ticket .
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Books products grid -->

        <div class="container">
            <div class="row pt120">
                <div class="books-grid">

                    <div class="row mb30">
                       @foreach($source_destinations as $source_destination)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="books-item">
                                    <div class="books-item-thumb">
                                        <img src="{{asset($source_destination->image)}}" alt="{{$source_destination->source_destination_name}}">
                                        <div class="new">New</div>
                                        <div class="sale">Sale</div>
                                        <div class="overlay overlay-books"></div>
                                    </div>

                                    <div class="books-item-info">
                                        <h5 class="books-title"><a href=" {{route('booking.rapid.add',['id'=>$source_destination->id])}}">
                                                {{$source_destination->source_destination_name}}
                                            </a></h5>

                                        <div class="books-price">Tsh.{{$source_destination->price}}</div>
                                    </div>

                                    <a href="{{route('booking.single',['id'=>$source_destination->id])}}" class="btn btn-small btn--dark add">
                                        <span class="text">Book The Ticket</span>
                                    </a>

                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row pb120">
                         <div class="col-lg-12">{{$source_destinations->links()}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection