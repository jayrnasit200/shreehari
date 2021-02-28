 @extends('layouts.front_home')

@section('content')
<div class="container">
  <div class="mainbanner">
  <div id="main-banner" class="owl-carousel home-slider">
    @foreach(get_banner_by_name('banner') as $val)
    <div class="item"> <a href="#"><img src="{{ url($val->image) }}" alt="main-banner1" class="img-responsive" /></a> </div>
    @endforeach
  </div>
</div>
</div>
<div class="container">
  <div class="row">  
    <div id="brand_carouse" class="owl-carousel brand-logo">
        
        @foreach(get_banner_by_name('logo') as $val)
        <div class="item text-center"> <a href="#"><img src="{{ url($val->image) }}" alt="Disney" class="img-responsive" /></a> </div>
        @endforeach
       
      </div>
 
  </div>
  <div class="row">
    <div id="content" class="col-sm-12">
      <div class="customtab">
        <div id="tabs" class="customtab-wrapper">
          <ul class='customtab-inner'>
            <li class='tab'><a href="#tab-latest">Latest Product</a></li>
            <li class='tab'><a href="#tab-special">Special Product</a></li>
            <li class='tab'><a href="#tab-bestseller">Bestseller Items</a></li>
          </ul>
        </div>
        <div id="tab-latest" class="tab-content">
          <div class="box">
            <div id="latest-slidertab" class="row owl-carousel product-slider">
              @foreach($latest as $val)
              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="{{ url('/product',$val->model_number) }}"><img src="{{ url($val->image) }}"  class=" pro_img img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" id="{{$val->id}}" class="addtocart-btn" >Add To Cart</button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">{{ $val->name }}</a></h4>
                    <p class="price product-price">{{$val->price}} <span class="price-old">{{$val->discount}}</span></p>
                    
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <!-- tab-latest-->
        <div id="tab-special" class="tab-content">
          <div class="box">
            <div id="special-slidertab" class="row owl-carousel product-slider">

              <div class="item">
                <div class="product-thumb transition">
                  <div class="image product-imageblock"> <a href="product.html"> <img src="{{ url('front_assets/image/product/product4.jpg') }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="img-responsive" /> </a>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                  <div class="caption product-detail">
                    <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">lorem ippsum dolor dummy</a></h4>
                    <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span> </p>
                  </div>
                  <div class="button-group">
                    <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                    <button type="button" class="addtocart-btn" >Add To Cart</button>
                    <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- tab-special-->
        <div id="tab-bestseller" class="tab-content">
          <div class="box">
            <div id="bestseller-slidertab" class="row owl-carousel product-slider">
                @foreach($best as $val)
                  <div class="item">
                    <div class="product-thumb transition">
                      <div class="image product-imageblock"> <a href="{{ url('/product',$val->model_number) }}"><img src="{{ url($val->image) }}"  class=" pro_img img-responsive" /> </a>
                        <div class="button-group">
                          <button type="button" id="{{$val->id}}" class="addtocart-btn" >Add To Cart</button>
                        </div>
                      </div>
                      <div class="caption product-detail">
                        <h4 class="product-name"><a href="#" title="lorem ippsum dolor dummy">{{ $val->name }}</a></h4>
                        <p class="price product-price">{{$val->price}} <span class="price-old">{{$val->discount}}</span></p>
                        
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                      </div>
                      <div class="button-group">
                        <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                        <button type="button" class="addtocart-btn" >Add To Cart</button>
                        <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                      </div>
                    </div>
                  </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="parallax">
        <ul id="testimonial" class="row owl-carousel product-slider">
          <li class="item">
            <div class="panel-default">
              <div class="testimonial-image"><img src="{{ url('front_assets/image/t1.jpg') }}" alt="#"></div>
              <div class="testimonial-name"><h2>Janet Wilson</h2></div>
              <div class="testimonial-designation"><p>Web Designer</p></div>
              <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore et <br> dolore  Rem ipsum doLorem ipsum ut labore et dolore mamagna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
            </div>
          </li>
          <li class="item">
            <div class="panel-default">
              <div class="testimonial-image"><img src="{{ url('front_assets/image/t2.jpg') }}" alt="#"></div>
              <div class="testimonial-name"><h2>Linda Howard</h2></div>
              <div class="testimonial-designation"><p>Web Deweloper</p></div>
              <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore et <br> dolore  Rem ipsum doLorem ipsum ut labore et dolore mamagna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
            </div>
          </li>
          <li class="item">
            <div class="panel-default">
              <div class="testimonial-image"><img src="{{ url('front_assets/image/t3.jpg') }}" alt="#"></div>
              <div class="testimonial-name"><h2>Janet Wilson</h2></div>
              <div class="testimonial-designation"><p>Web Designer</p></div>
              <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore et <br> dolore  Rem ipsum doLorem ipsum ut labore et dolore mamagna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>

            </div>
          </li>
          <li class="item">
            <div class="panel-default">
              <div class="testimonial-image"><img src="{{ url('front_assets/image/t4.jpg') }}" alt="#"></div>
              <div class="testimonial-name"><h2>Linda Howard</h2></div>
              <div class="testimonial-designation"><p>Web Deweloper</p></div>
              <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ut labore et dolore ma ipsum ut labore et <br> dolore  Rem ipsum doLorem ipsum ut labore et dolore mamagna.Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>

            </div>
          </li>
        </ul>
      </div>
       @foreach(cat_for_show_home() as $val)
      <h3 class="productblock-title">{{$val->cat_name}},{{$val->name}}</h3>
            <div class="box">
              <div id="feature-slider" class="row owl-carousel product-slider">

              @foreach(get_sub_data_limit($val->id) as $value)
                <div class="item product-slider-item">
                  <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="{{ url('/product',$value->model_number) }}"> <img src="{{ url($value->image) }}" alt="lorem ippsum dolor dummy" title="lorem ippsum dolor dummy" class="pro_img img-responsive" /> </a>
                      <div class="button-group">
                        <!-- <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button> -->
                        <button type="button" id="{{$value->id}}" class="addtocart-btn" >Add To Cart</button>
                        <!-- <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button> -->
                      </div>
                    </div>
                    <div class="caption product-detail">
                      <h4 class="product-name"><a href="product.html" title="lorem ippsum dolor dummy">{{$value->name}}</a></h4>
                      <p class="price product-price"> <span class="price-new">{{$value->price}}</span> <span class="price-old">{{$value->discount}}</span> <span class="price-tax"></span> </p>
                    </div>
                    <div class="button-group">
                      <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                      <button type="button" class="addtocart-btn" >Add To Cart</button>
                      <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                    </div>
                  </div>
                </div>
              @endforeach
                
                
              </div>
            </div>
      @endforeach

    
     
      
    </div>
  </div>
  <div id="subbanner4" class="banner" >
  <div class="item"> <a href="#"><img src="{{ url('front_assets/image/banners/subbanner4.jpg') }}" alt="Sub Banner4" class="img-responsive" /></a> </div>
</div>  
</div>
@endsection