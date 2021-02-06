<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ config('app.name') }}</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="e-commerce site well design with responsive view." />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="{{ url('front_assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
<link href="{{ url('front_assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="{{ url('front_assets/css/stylesheet.css') }}" rel="stylesheet">
<link href="{{ url('front_assets/css/responsive.css') }}" rel="stylesheet">
<link href="{{ url('front_assets/owl-carousel/owl.carousel.css') }}" type="text/css" rel="stylesheet" media="screen" />
<link href="{{ url('front_assets/owl-carousel/owl.transitions.css') }}" type="text/css" rel="stylesheet" media="screen" />
@yield('css')
<script src="{{ url('front_assets/javascript/jquery-2.1.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url('front_assets/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url('front_assets/javascript/jstree.min.js') }}" type="text/javascript"></script>
<script src="{{ url('front_assets/javascript/template.js') }}" type="text/javascript" ></script>
<script src="{{ url('front_assets/javascript/common.js') }}" type="text/javascript"></script>
<script src="{{ url('front_assets/javascript/global.js') }}" type="text/javascript"></script>
<script src="{{ url('front_assets/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
</head>
<body>
<div class="preloader loader" style="display: block; background:#f2f2f2;"> <img src="{{ url('front_assets/image/loader.gif') }}"  alt="#"/></div>
<header>
  <div class="header-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          
          <div class="top-right pull-right">
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <li class="dropdown account"><a href="#" title="My Account" class="  dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-user"></i><span>My Account</span> <span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-menu-right">

                    @if(empty(auth()->user()->id))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    @else
                        <li><a href="login.html">My Account</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                      @endif
                  </ul>
                </li>
                <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i><span>Wish List</span><span> (0)</span></a></li>
              </ul>
              <div class="search-box">
                <input class="input-text" placeholder="Search By Products.." type="text">
                <button class="search-btn"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header-inner">
      <div class="col-sm-4 col-xs-6 header-left">
        <div class="shipping">
          <div class="shipping-img"></div>
          <div class="shipping-text">(+91) 000-1233<br>
            <span class="shipping-detail">24/7 Online Support</span></div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="index-2.html"><img src="{{ url('front_assets/image/logo.png') }}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-right">
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total"><span class="cart-title">Shopping Cart</span><br>
          0 item(s) - $0.00</span> </button>
          <ul class="dropdown-menu pull-right cart-dropdown-menu">
            <li>
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td class="text-center"><a href="#"><img class="img-thumbnail" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{ url('front_assets/image/product/7product50x59.jpg') }}"></a></td>
                    <td class="text-left"><a href="#">lorem ippsum dolor dummy</a></td>
                    <td class="text-right">x 1</td>
                    <td class="text-right">$254.00</td>
                    <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li>
              <div>
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                      <td class="text-right"><strong>Sub-Total</strong></td>
                      <td class="text-right">$210.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                      <td class="text-right">$2.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>VAT (20%)</strong></td>
                      <td class="text-right">$42.00</td>
                    </tr>
                    <tr>
                      <td class="text-right"><strong>Total</strong></td>
                      <td class="text-right">$254.00</td>
                    </tr>
                  </tbody>
                </table>
                <p class="text-right"> <span class="btn-viewcart"><a href="cart.html"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="checkout.html"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav id="menu" class="navbar">
      <div class="nav-inner">
        <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
          <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
        </div>
        <div class="navbar-collapse">
          <ul class="main-navigation">
            <li><a href="{{ url('/') }}">Home</a> </li>
             @foreach(get_category() as $val)
              <li><a>{{ $val->name }}</a>
              <ul>
                @foreach(get_subcategory_by_id($val->id) as $val)
                <li><a href="{{ url('/category',$val->name) }}">{{ $val->name }}</a></li>
                @endforeach
              </ul>
                @endforeach
            </li>
            <li><a href="about-us.html" >About us</a></li>
            <li><a href="contact.html" >Contact Us</a> </li>
          </ul>
        </div>
      </div>
    </nav>
    <hr>
  </div>
</header>



        <!-- header end -->
 @yield('content')
  <!-- footer area start -->
        <footer>
  <div class="container">
  <hr>
    <div class="row">
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Information</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="checkout.html">Delivery Information</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Returns</a></li>
          <li><a href="#">Site Map</a></li>
          <li><a href="#">Wish List</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Why Choose</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="contact.html">Contact Us</a></li>
          <li><a href="#">Product Recall</a></li>
          <li><a href="#">Gift Vouchers</a></li>
          <li><a href="#">Returns and Exchanges</a></li>
          <li><a href="#">Shipping Options</a></li>
          <li><a href="#">Help & FAQs</a></li>
          <li><a href="#">Sale Only Today</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">My Account</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="#">Sign in</a></li>
          <li><a href="gift.html">Gift Vouchers</a></li>
          <li><a href="affiliate.html">Affiliates</a></li>
          <li><a href="#">View Cart</a></li>
          <li><a href="#">Checkout</a></li>
          <li><a href="#">Track My Order</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <div class="content_footercms_right">
          <div class="footer-contact">
            <h5 class="contact-title footer-title">Contact Us</h5>
            <ul class="ul-wrapper">
              <li><i class="fa fa-map-marker"></i><span class="location2"> Warehouse & Offices,<br>
                12345 Street name, California<br>
                USA</span></li>
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">info@localhost.com</a></span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">+91 0987-654-321<br>+91 0987-654-321</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer-top-cms">
        <div class="col-sm-7">
          <div class="newslatter">
            <form>
              <h5>Sign up for our Newsletter</h5>
              <div class="input-group">
                <input type="text" class=" form-control" placeholder="Your-email@website.com">
                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="footer-social">
            <h5>Social</h5>
            <ul>
              <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <a id="scrollup">Scroll</a> </footer>
<div class="footer-bottom">
  <div class="container">
    <div class="copyright">Powered By &nbsp;<a class="yourstore" href="http://www.lionode.com/">lionode &copy; 2017 </a> </div>
    <div class="footer-bottom-cms">
      <div class="footer-payment">
        <ul>
          <li class="mastero"><a href="#"><img alt="" src="{{ url('front_assets/image/payment/mastero.jpg') }}"></a></li>
          <li class="visa"><a href="#"><img alt="" src="{{ url('front_assets/image/payment/visa.jpg') }}"></a></li>
          <li class="currus"><a href="#"><img alt="" src="{{ url('front_assets/image/payment/currus.jpg') }}"></a></li>
          <li class="discover"><a href="#"><img alt="" src="{{ url('front_assets/image/payment/discover.jpg') }}"></a></li>
          <li class="bank"><a href="#"><img alt="" src="{{ url('front_assets/image/payment/bank.jpg') }}"></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script src="{{ url('front_assets/javascript/parally.js') }}"></script> 
@yield('js')

<script>
$('.parallax').parally({offset: -40});
</script>
</body>

<!-- Mirrored from html.lionode.com/timewatch/Watch Time/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 12:25:14 GMT -->
</html>
