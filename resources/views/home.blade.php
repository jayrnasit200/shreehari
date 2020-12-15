 @extends('layouts.front_home')

@section('content')
<!-- slider start -->
        <div id="home-area" class="height-100vh bg-img watch-slider" style="background-image:  url('front_assets/assets/img/slider/10.jpg') ">
            <div class="table">
                <div class="table-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 align-items-center">
                                <div class="slider-text">
                                    <h2 class="tlt1">Most <br>intelligent <br>& Smart Watch.</h2>
                                    <div class="button-set">
                                        <a class="explore-btn video-popup" href="https://www.youtube.com/watch?v=K4wEI5zhHB0">
                                            Explore More <i class="ti-control-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wacth-img tilter">
                                    <img src="{{ url('front_assets/assets/img/slider/1.png') }}" alt="" >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area start -->
        <div id="about-area" class="watch-about-area bg-img ptb-150" style="background-image: url({{ url('front_assets/assets/img/bg/8.jpg') }})">
            <div class="container">
                <div class="watch-about-content text-center">
                    <img class="tilter" src="{{ url('front_assets/assets/img/banner/4.png') }}" alt="" >
                    <h2>About Smart WT002</h2>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
                    <a href="about-us.html" target="_blank">Read More</a>
                </div>
            </div>
        </div>
        <!-- overview area start -->
        <div class="overview-area bg-img pt-140 pb-70 mb-145" style="background-image: url({{ url('front_assets/assets/img/bg/9.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="ml-auto col-lg-6">
                        <div class="section-title-8 peragraph-width mb-45">
                            <h2>What It can do?</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-overview">
                                    <h4>Active Apps.</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-overview">
                                    <h4>Cellular.</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-overview">
                                    <h4>Health Support</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-overview">
                                    <h4>Better ToDo</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features area start -->
        <div class="power-feathers-area">
            <div class="container">
                <div class="section-title-8 peragraph-width-2 mb-45">
                    <h2>Inside Power & Feathers.</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is has been the random industry's standard dummy text.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="single-power-feathers-wrapper">
                            <div class="single-power-feathers mb-55">
                                <img src="{{ url('front_assets/assets/img/icon-img/29.png') }}" alt="">
                                <h4>Hexa Core Processor</h4>
                                <p>Most powerful Hexa core and  Processor 2.9 Ghz. Perfect for Stromg Gammer.</p>
                            </div>
                            <div class="single-power-feathers mb-55">
                                <img src="{{ url('front_assets/assets/img/icon-img/32.png') }}" alt="">
                                <h4>Powerful Battery</h4>
                                <p>Most powerful Hexa core and  Processor 2.9 Ghz. Perfect for Stromg Gammer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="single-power-feathers-wrapper">
                            <div class="single-power-feathers mb-55 pl-30">
                                <img src="{{ url('front_assets/assets/img/icon-img/30.png') }}" alt="">
                                <h4>Super Shine Camera</h4>
                                <p>Most powerful Hexa core and  Processor 2.9 Ghz. Perfect for Stromg Gammer.</p>
                            </div>
                            <div class="single-power-feathers mb-55 pl-30">
                                <img src="{{ url('front_assets/assets/img/icon-img/33.png') }}" alt="">
                                <h4>GPS Support</h4>
                                <p>Most powerful Hexa core and  Processor 2.9 Ghz. Perfect for Stromg Gammer.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="single-power-feathers-wrapper">
                            <div class="single-power-feathers mb-55 pl-60 pr-30">
                                <img src="{{ url('front_assets/assets/img/icon-img/31.png') }}" alt="">
                                <h4>Powerful Storage.</h4>
                                <p>Most powerful Hexa core and  Processor 2.9 Ghz. Perfect for Stromg Gammer.</p>
                            </div>
                            <div class="single-power-feathers mb-55 pl-60 pr-30">
                                <img src="{{ url('front_assets/assets/img/icon-img/34.png') }}" alt="">
                                <h4>Fastest RAM</h4>
                                <p>Most powerful Hexa core and  Processor 2.9 Ghz. Perfect for Stromg Gammer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product area start -->
        <div id="shop-area" class="product-area pt-85 pb-120 smart-watch-res">
            <div class="container">
                <div class="section-title-8 peragraph-width-3 mb15 text-center">
                    <h2>All what you need</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
                <div class="smart-watch-product-active owl-carousel">
                    <div class="smart-watch-product-wrapper">
                        <a href="#"><img src="{{ url('front_assets/assets/img/product/smart-watch/1.jpg') }}" alt=""></a>
                        <div class="smart-watch-content">
                            <h4><a href="#"> Smart Watch D400x</a></h4>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <div class="smart-watch-product-wrapper">
                        <a href="#"><img src="{{ url('front_assets/assets/img/product/smart-watch/2.jpg') }}" alt=""></a>
                        <div class="smart-watch-content">
                            <h4><a href="#">nice Watch D200x</a></h4>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <div class="smart-watch-product-wrapper">
                        <a href="#"><img src="{{ url('front_assets/assets/img/product/smart-watch/3.jpg') }}" alt=""></a>
                        <div class="smart-watch-content">
                            <h4><a href="#">awesome Watch D400x</a></h4>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                    <div class="smart-watch-product-wrapper">
                        <a href="#"><img src="{{ url('front_assets/assets/img/product/smart-watch/1.jpg') }}" alt=""></a>
                        <div class="smart-watch-content">
                            <h4><a href="#">Drubo Smart Watch D200x</a></h4>
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- video area start -->
        <div id="video-area" class="video-area bg-img pt-140 pb-135" style="background-image: url({{ url('front_assets/assets/img/bg/10.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="ml-auto col-lg-6">
                        <div class="watch-video-content">
                            <h2>Explore <br>Every part of this <br>Watch.</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <div class="video-btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=wI4ocEF3Wfk"><i class="ti-control-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features area start -->
        <div id="features-area" class="features-area pt-200 pb-145">
            <div class="container-fulwidth">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-list">
                            <div class="single-features-list normal-device">
                                <div class="feature-list-icon">
                                    <img src="{{ url('front_assets/assets/img/icon-img/35.png') }}" alt="">
                                </div>
                                <div class="feature-list-text text-right">
                                    <h3>Play <span>Music</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                </div>
                            </div>
                            <div class="single-features-list normal-device middle-features-list">
                                <div class="feature-list-icon">
                                    <img src="{{ url('front_assets/assets/img/icon-img/36.png') }}" alt="">
                                </div>
                                <div class="feature-list-text text-right">
                                    <h3>Camera <span>Shots</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                </div>
                            </div>
                            <div class="single-features-list mrn-nn normal-device">
                                <div class="feature-list-icon">
                                    <img src="{{ url('front_assets/assets/img/icon-img/37.png') }}" alt="">
                                </div>
                                <div class="feature-list-text text-right">
                                    <h3>Heart <span>Rate</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 text-center">
                        <div class="feature-top">
                            <div class="feature-img">
                                <img src="{{ url('front_assets/assets/img/banner/6.png') }}" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-list res2">
                            <div class="single-features-list2 sfl-lsft normal-device">
                                <div class="feature-list-icon2">
                                    <img src="{{ url('front_assets/assets/img/icon-img/38.png') }}" alt="">
                                </div>
                                <div class="feature-list-text2 res1">
                                    <h3>Colling <span>Support</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                </div>
                            </div>
                            <div class="single-features-list2 sfl-lsft normal-device middle-features-list2">
                                <div class="feature-list-icon2">
                                    <img src="{{ url('front_assets/assets/img/icon-img/39.png') }}" alt="">
                                </div>
                                <div class="feature-list-text2">
                                    <h3>Pedometer <span>Run</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                </div>
                            </div>
                            <div class="single-features-list2 mrn-nn sfl-lsft normal-device">
                                <div class="feature-list-icon2">
                                    <img src="{{ url('front_assets/assets/img/icon-img/40.png') }}" alt="">
                                </div>
                                <div class="feature-list-text2 res1">
                                    <h3>Weather <span>Support</span></h3>
                                    <p>Lorem Ipsum is simply dummy text of the typesetting industry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- features area end -->
        <!-- feadback area start -->
        <div class="feadback-area">
            <div class="container">
                <div class="section-title-8 peragraph-width-3 mb-45 text-center">
                    <h2>Users Feedback</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                </div>
                <div class="feadback-silder-active owl-carousel">
                    <div class="single-feadback-wrapper">
                        <div class="feadback-img-title">
                            <div class="feadback-img">
                                <img src="{{ url('front_assets/assets/img/team/3.png') }}" alt="">
                            </div>
                            <div class="feadback-title">
                                <h4>Emma Hayes</h4>
                                <span>Ui UX Designer</span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="single-feadback-wrapper">
                        <div class="feadback-img-title">
                            <div class="feadback-img">
                                <img src="{{ url('front_assets/assets/img/team/4.png') }}" alt="">
                            </div>
                            <div class="feadback-title">
                                <h4>Tayeb Rayed</h4>
                                <span>Ui UX Designer</span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="single-feadback-wrapper">
                        <div class="feadback-img-title">
                            <div class="feadback-img">
                                <img src="{{ url('front_assets/assets/img/team/5.png') }}" alt="">
                            </div>
                            <div class="feadback-title">
                                <h4>Deborah Berry</h4>
                                <span>Ui UX Designer</span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="single-feadback-wrapper">
                        <div class="feadback-img-title">
                            <div class="feadback-img">
                                <img src="{{ url('front_assets/assets/img/team/4.png') }}" alt="">
                            </div>
                            <div class="feadback-title">
                                <h4>Tayeb Rayed</h4>
                                <span>Ui UX Designer</span>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- feadback area end -->
        <!-- subscribe area start -->
        <div class="newsletter-area pt-150">
		    <div class="container">
                <div class="row">
                    <div class="ml-auto col-lg-10 mr-auto">
                        <div class="newsletter-style-6">
                            <div id="mc_embed_signup" class="subscribe-form-6">
                                <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll" class="mc-form">
                                        <input type="email" value="" name="EMAIL" class="email" placeholder="Enter your Mail Address" required>
                                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                        <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
		    </div>
		</div>
@endsection