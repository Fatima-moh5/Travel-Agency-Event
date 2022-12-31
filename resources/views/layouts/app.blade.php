<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Mithra </title>
    <!-- Website's title ( it will be shown in browser's tab ), Change the website's title based on your Hotel information -->
    <meta name="description" content="tour programs to Syria, Libanon, Jordan">
    <!-- Add your Hotel short description -->
    <meta name="keywords" content="tour programs,Syria,Lebanon,Jordan,hotels">
    <!-- Add some Keywords based on your Hotel and your business and separate them by comma -->
    <meta name="author" content="Joseph a, ravistheme@gmail.com">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic%7cPlayfair+Display:400,700%7cGreat+Vibes'
          rel='stylesheet' type='text/css'><!-- Attach Google fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('website/css/styles.css')}}"><!-- Attach the main stylesheet file -->

</head>
<body class="home-page-1">
<div class="main-wrapper">
    <!-- Header Section -->
    <header id="main-header">
        <div class="inner-container container">
            <div class="l-sec col-xs-8 col-sm-6 col-md-3">
                <a href="{{url('/')}}" id="t-logo">
                    <img  src="{{ url('storage/'.$setting->logo)}}"  width="100">
                </a>
            </div>
            <div class="r-sec col-xs-4 col-sm-6 col-md-9">
                <nav id="main-menu">
                    <ul class="list-inline">
                        <li><a href="{{url('home')}}">{{__('menu.home')}}</a></li>
                        <li><a href="{{url('about')}}">{{__('menu.about')}}</a></li>
                        <li><a href="{{url('contact')}}">{{__('menu.contact')}}</a></li>
                        <li><a href="#">{{__('languages')}}</a>
                            <ul>
                                <li><a href="{{url('change-language/en')}}">En</a></li>
                                <li><a href="{{url('change-language/fr')}}">Fr</a></li>
                            </ul>
                        </li>
                    </ul>

                </nav>
                <div id="main-menu-handle" class="ravis-btn btn-type-2"><i class="fa fa-bars"></i><i class="fa fa-close"></i></div><!-- Mobile Menu handle -->
{{--                <a href="pages/booking.html" id="header-book-bow" class="ravis-btn btn-type-2">--}}
{{--                    <span>Book Bow</span> <i class="fa fa-calendar"></i>--}}
{{--                </a>--}}
{{--                <ul class="social-icons list-inline" >--}}
{{--                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                </ul>--}}
            </div>
        </div>
        <div id="mobile-menu-container"></div>
    </header>
    <!-- End of Header Section -->

  @yield('content')
    <!--Footer Section-->
    <footer id="main-footer">
        <div class="inner-container container">
            <div class="t-sec clearfix">
                <div class="widget-box col-sm-6 col-md-4">
                    <a href="#" id="f-logo">
                        <span class="title">Mithra</span>
                        <span class="desc">Luxury Trips</span>
                    </a>
                    <div class="widget-content text-widget">
                        A Trip of Thousand Miles always starts by a Step! His force and profession come from the wide experience, Mahmoud Arnaout Director of "Mithra" travel agency, licensed as a tourist guide “French language" in 1995 and as a teacher for many years preparing new guides.
                    </div>
                </div>
                <div class="widget-box col-sm-6 col-md-4">
                    <h4 class="title">Newsletter</h4>
                    <div class="widget-content newsletter">
                        <div class="desc">
                            Some description of how your newsletter works will be located in this section.
                        </div>
                    </div>
                </div>

                <div class="widget-box col-sm-6 col-md-4">
                    <h4 class="title">Contact Us</h4>
                    <div class="widget-content contact">
                        <ul class="contact-info">
                            <li>
                                <i class="fa fa-home"></i>
                                {{$setting->address}}
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                {{$setting->phone}}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                {{$setting->email}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="b-sec clearfix">
                <div class="copy-right">
                    With <i class="fa fa-heart"></i> by <a href="https://your1site.com/"
                                                           target="_blank"><b>YOUR(1)SITE</b></a> © 2022. All Rights
                    Reserved.
                </div>
                <ul class="social-icons list-inline">
                    <li><a href="{{$setting->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$setting->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--End of Footer Section-->

</div>

<!-- JS Include Section -->
<script type="text/javascript" src="{{asset('website/js/jquery-3.1.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/helper.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/js/template.js')}}"></script>
@stack('trip-details-scripts')
</body>
</html>
