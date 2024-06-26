<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>{{ sys_config('site_name') }}</title>
<meta name="description" content="{{ sys_config('site_name') }} e-commerce Site Use Buy Best Products Best Price." />
<meta name="keywords" content="ecommerce,ecommerce website,ecommerce website in india,ecommerce website templates free download,ecommerce template,ecommerce meaning,ecommerce logo,ecommerce website design,ecommerce executive,ecommerce app,ecommerce admin panel,ecommerce app design,ecommerce admin panel template,ecommerce android app,ecommerce accounting software,ecommerce app design template,ecommerce account management services,ecommerce business,ecommerce bootstrap template free,ecommerce business in india,ecommerce business ideas,ecommerce business model,ecommerce business name ideas,ecommerce blog,ecommerce business meaning,ecommerce calculator,ecommerce companies in india,ecommerce category,ecommerce company name ideas,ecommerce course online free,ecommerce calculator excel,ecommerce commission rates,ecommerce companies in ahmedabad,ecommerce development,ecommerce database design,ecommerce disadvantage,ecommerce development companies in india,ecommerce design,ecommerce definition,ecommerce domain,ecommerce delivery,ecommerce executive jobs in surat,e commerce express,ecommerce executive jobs,ecommerce erp,ecommerce email templates,ecommerce examples,ecommerce executive jobs in ahmedabad,ecommerce framework,ecommerce free template bootstrap,ecommerce features,ecommerce franchise,ecommerce flyer,ecommerce full form,ecommerce features list,ecommerce free template,ecommerce growth,ecommerce growth in india,ecommerce github,ecommerce growth rate,e commerce gst,ecommerce guidelines,ecommerce gif,ecommerce gd topic,,ecommerce website,ecommerce website in india,ecommerce website templates free download,ecommerce template,ecommerce meaning,ecommerce logo,ecommerce website design,ecommerce executive,ecommerce app,ecommerce admin panel,ecommerce app design,ecommerce admin panel template,ecommerce android app,ecommerce accounting software,ecommerce app design template,ecommerce account management services,ecommerce business,ecommerce bootstrap template free,ecommerce business in india,ecommerce business ideas,ecommerce business model,ecommerce business name ideas,ecommerce blog,ecommerce business meaning" />
<link rel="shortcut icon" href="{{ url(sys_config('logo')) }}" />
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-E3X6R38RRB"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-E3X6R38RRB');
</script>
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
                        <li><a href="{{url('/myaccount')}}">My Account</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                      @endif
                  </ul>
                </li>
                <!-- <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart"></i><span>Wish List</span><span> (0)</span></a></li> -->
              </ul>
                <div class="search-box">
              <form method="get" action="{{'search'}}">
                  <input class="input-text" placeholder="Search By Products.." type="text">
                  <button class="search-btn"><i class="fa fa-search"></i></button>
              </form>
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
          <div class="shipping-text"> {{ sys_config('phone') }} <br>
            <span class="shipping-detail">24/7 Online Support</span></div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-middle">
        <div class="header-middle-top">
          <div id="logo"> <a href="{{ url('/') }}"><img src="{{ url(sys_config('logo')) }}" title="{{ sys_config('site_name') }}" alt="{{ sys_config('site_name') }}" class="img-responsive" /></a> </div>
        </div>
      </div>
      <div class="col-sm-4 col-xs-12 header-right">
        <div id="cart" class="btn-group btn-block">
          <button type="button" class="btn btn-inverse btn-block btn-lg cart-button"> <span id="cart-total"><span class="cart-title">Shopping Cart</span><br>
          <label id="get_cart_totel">0</label> item(s)</span> </button>
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
                <li><a href="{{ url('/category',$val->categories_id)}}/{{$val->name}}">{{ $val->name }}</a></li>
                @endforeach
              </ul>
                @endforeach
            </li>
            <!-- <li><a href="about-us.html" >About us</a></li> -->
            <li><a href="{{url('/contact')}}" >Contact Us</a> </li>
            <li><a href="{{ url('/privacy-policy') }}" >Privacy Policy</a> </li>
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
          <!-- <li><a href="about-us.html">About Us</a></li> -->
          <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
          <li><a href="{{url('/term-and-conditions')}}">Terms &amp; Conditions</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">My Account</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="{{url('/myaccount')}}">My Account</a></li>
          <li><a href="{{url('/change-password')}}">Change Password</a></li>
          <li><a href="{{url('order-history')}}">Order History</a></li>
          <li><a href="{{url('/cart')}}">View Cart</a></li>
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <h5 class="footer-title">Pages</h5>
        <ul class="list-unstyled ul-wrapper">
          <li><a href="{{ url('/register') }}">Sign UP</a></li>
          <li><a href="{{ url('/vendor/register') }}">Vendor Sign UP</a></li>
          <li><a href="{{ url('/login') }}">Sign IN</a></li>
          <li><a href="#">Contact Us</a></li>
          
        </ul>
      </div>
      <div class="col-sm-3 footer-block">
        <div class="content_footercms_right">
          <div class="footer-contact">
            <h5 class="contact-title footer-title">Contact Us</h5>
            <ul class="ul-wrapper">
              <!-- <li><i class="fa fa-map-marker"></i><span class="location2"> Warehouse & Offices,<br>
                12345 Street name, California<br>
                USA</span></li> -->
              <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">{{ sys_config('from_email_address') }}</a></span></li>
              <li><i class="fa fa-mobile"></i><span class="phone2">{{ sys_config('phone') }}</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="footer-top-cms">
        <div class="col-sm-7">
          <div class="newslatter">
            <!-- <form>
              <h5>Sign up for our Newsletter</h5>
              <div class="input-group">
                <input type="text" class=" form-control" placeholder="Your-email@website.com">
                <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
              </div>
            </form> -->
          </div>
        </div>
        <div class="col-sm-5">
          <div class="footer-social">
            <h5>Social</h5>
            <ul>
              <li class="facebook"><a target="_blank" href="{{ sys_config('facebook') }}"><i class="fa fa-facebook"></i></a></li>
              <li class="linkedin"><a target="_blank" href="{{ sys_config('linkedin') }}"><i class="fa fa-linkedin"></i></a></li>
              <li class="twitter"><a target="_blank" href="{{ sys_config('twitter') }}"><i class="fa fa-twitter"></i></a></li>
              <li class="instagram"><a target="_blank" href="{{ sys_config('instagram') }}"><i class="fa fa-instagram"></i></a></li>
              <li class="youtube"><a target="_blank" href="{{ sys_config('youtube') }}"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <a id="scrollup">Scroll</a> </footer>
<div class="footer-bottom">
  <div class="container">
    <div class="copyright">{{ sys_config('copyright_text') }}</a> </div>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
   setTimeout(function () {
        $("#msg").fadeOut(500);
    }, 1000);

    $(document).ready(function() {
    	
    $(".addtocart-btn").click(function(){
       event.preventDefault();
       var id= this.id;
      let _token   = "{{ csrf_token() }}";
        // alert(_token);

      $.ajax({
        url:"{{ route('add_cart') }}",
        type:"POST",
        data:{
          id:id,
          _token: _token
        },
        success:function(response){
          if(response == 1) {
          	var total = $('#get_cart_totel').text();
    		total++;
            document.getElementById("get_cart_totel").innerHTML = total;
            swal({
              title: "Add to Cart",
              text: "You product added to cart successfully",
              icon: "success",
              button: "Ok",
              timer: 1000
            });
            console.log('{{cart_total()}}');
          }else{
            // console.log(response);
             window.location.href = "{{url('/login')}}";
          }
        },
        error: function() {
             window.location.href = "{{url('/login')}}";
        }
       });
    }); 
     $(".cart-button").click(function(){
             window.location.href = "{{url('/cart')}}";
    }); 

});
    // get_cart_totel
    $(document).ready(function() {

    	document.getElementById("get_cart_totel").innerHTML = "{{cart_total()}}";
    }); 

</script>
<script>
$('.parallax').parally({offset: -40});
</script>
</body>

<!-- Mirrored from html.lionode.com/timewatch/Watch Time/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 12:25:14 GMT -->
</html>
