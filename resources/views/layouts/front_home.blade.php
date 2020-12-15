<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('front_assets/assets/logo.png') }}">
    
    <!-- all css here -->
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/pe-icon-7-stroke.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/icofont.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/hamburgers.min.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/bundle.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ url('front_assets/assets/css/responsive.css') }}">
        <script src="{{ url('front_assets/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
 <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <header class="header-area wrapper-padding-2">
            <div id="main-menu" class="sticker header-sticky">
                <div class="container-fluid">
                    <div class="logo-menu-wrapper">
                        <div class="logo-watch navbar-header">
                            <a class="navbar-brand" href="index.html"><img src="{{ url('front_assets/assets/img/logo/logo-6.png') }}" alt=""></a>
                        </div>
                        <div class="hamburger-wrapper">
                            <div class="hamburger-menu menu-style-toggle text-right" id="main-menu-2">
                                <nav class="">
                                    <ul>
                                        <li><a href="#home-area">HOME</a></li>
                                        <li><a href="#about-area">ABOUT US</a></li>
                                        <li><a href="#shop-area">shop</a></li>
                                        <li><a href="#video-area">video</a></li>
                                        <li><a href="#features-area">features</a></li>
                                        <li><a href="#contact-area">contact</a></li>
                                    </ul>
                                </nav>
                                <div class="menu-toggle hamburger hamburger--squeeze">
                                    <div class="hamburger-box">
                                        <div class="hamburger-inner"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy-now-btn">
                              <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                              </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
 @yield('content')
  <!-- footer area start -->
        <footer id="contact-area" class="footer-area">
            <div class="footer-top-area pt-70 pb-35 wrapper-padding-5">
                <div class="container-fluid">
                    <div class="widget-wrapper">
                        <div class="footer-widget mb-30">
                            <a href="#"><img src="{{ url('front_assets/assets/img/logo/2.png') }}" alt=""></a>
                            <div class="footer-about-2">
                                <p>There are many variations of passages of Lorem Ipsum <br>the majority have suffered alteration in some form, by <br> injected humour</p>
                            </div>
                        </div>
                        <div class="footer-widget mb-30">
                            <h3 class="footer-widget-title-5">Contact Info</h3>
                            <div class="footer-info-wrapper-3">
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>Address: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p>66 Sipu road Rampura Banasree <br>USA- 10800</p>
                                    </div>
                                </div>
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>Phone: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p>+8801 (33) 515609735 <br>+8801 (66) 223352333</p>
                                    </div>
                                </div>
                                <div class="footer-address-furniture">
                                    <div class="footer-info-icon3">
                                        <span>E-mail: </span>
                                    </div>
                                    <div class="footer-info-content3">
                                        <p><a href="#"> email@domain.com</a> <br><a href="#"> domain@mail.info</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-widget mb-30">
                            <h3 class="footer-widget-title-5">Map</h3>
                            <div id="footer-map-2" class="footer-map footer-map-width "></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-20 gray-bg-8">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-furniture">
                                <p>Copyright © <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    
    
    
    
    
    
    
    
    
    <!-- all js here -->
        <script src="{{ url('front_assets/assets/js/vendor/jquery-1.12.0.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/popper.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/waypoints.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/ajax-mail.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ url('front_assets/assets/js/plugins.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMlLa3XrAmtemtf97Z2YpXwPLlimRK7Pk"></script>
    <script>
            function init() {
                var mapOptions = {
                    zoom: 11,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.709896, -73.995481),
                    styles: [
                        {
                            "featureType": "administrative.locality",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#2c2e33"
                                },
                                {
                                    "saturation": 7
                                },
                                {
                                    "lightness": 19
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#ffffff"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 100
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "poi",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#ffffff"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 100
                                },
                                {
                                    "visibility": "off"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#bbc0c4"
                                },
                                {
                                    "saturation": -93
                                },
                                {
                                    "lightness": 31
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "hue": "#bbc0c4"
                                },
                                {
                                    "saturation": -93
                                },
                                {
                                    "lightness": 31
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "road.arterial",
                            "elementType": "labels",
                            "stylers": [
                                {
                                    "hue": "#bbc0c4"
                                },
                                {
                                    "saturation": -93
                                },
                                {
                                    "lightness": -2
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [
                                {
                                    "hue": "#e9ebed"
                                },
                                {
                                    "saturation": -90
                                },
                                {
                                    "lightness": -8
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        },
                        {
                            "featureType": "transit",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#e9ebed"
                                },
                                {
                                    "saturation": 10
                                },
                                {
                                    "lightness": 69
                                },
                                {
                                    "visibility": "on"
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#e9ebed"
                                },
                                {
                                    "saturation": -78
                                },
                                {
                                    "lightness": 67
                                },
                                {
                                    "visibility": "simplified"
                                }
                            ]
                        }
                    ]
                };
                var mapElement = document.getElementById('footer-map-2');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.709896, -73.995481),
                    map: map,
                    icon: '{{ url("front_assets/assets/img/icon-img/46.png") }}',
                    animation:google.maps.Animation.BOUNCE,
                    title: 'Snazzy!'
                });
            }
            google.maps.event.addDomListener(window, 'load', init);
    </script>
        <script src="{{ url('front_assets/assets/js/main.js') }}"></script>
    </body>
</html>

      