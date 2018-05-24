<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>BRT Online Booking System</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/crumina-fonts.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/grid.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/primary-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->


    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">
        <div class="header-content-wrapper">
            <a href="{{route('index')}}"><b>Home</b></a>
            <a href="{{route('QRcode')}}" style="padding-left: 10px;"><b>Ticket</b></a>
            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <b style="padding-left: 15px;">Booking Store</b>
                        <span class="cart-count">{{Cart::content()->count()}}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            <h4 class="title-cart align-center">Total : Tsh {{Cart::total()}}</h4>
                            <a href="{{route('booking')}}">
                            <div class="btn btn-small btn--dark">
                               <span class="text">View Booking Store</span>
                            </div>
                            </a>
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


@yield('content')
<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/crum-mega-menu.js')}}"></script>
<script src="{{asset('js/swiper.jquery.min.js')}}"></script>
<script src="{{asset('js/theme-plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/form-actions.js')}}"></script>

<script src="{{asset('js/velocity.min.js')}}"></script>
<script src="{{asset('js/ScrollMagic.min.js')}}"></script>
<script src="{{asset('js/animation.velocity.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- ...end JS Script -->

<script>
    @if(Session::has('success'))
        toastr.success('{{Session::get('success')}}');
    @endif
    @if(Session::has('info'))
    toastr.info('{{Session::get('info')}}');
    @endif
</script>
</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>