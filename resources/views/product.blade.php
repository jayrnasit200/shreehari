@extends('layouts.front_home') @section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />
<style>
    .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
 font-size: 50px;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #ffd53c;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}

</style>
@endsection @section('content')
<div class="container">
    <ul class="breadcrumb">
        <li>
            <a href="index-2.html"><i class="fa fa-home"></i></a>
        </li>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a>{{ $pro->name }}</a></li>
    </ul>
    <div class="row">
    @include('product_left_bar')
        <div id="content" class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbnails">
                        <div>
                            <a class="thumbnail" href="{{url($pro->image)}}" data-lightbox="image-1">
                                <img src="{{ url($pro->image) }}" data-lightbox="roadtrip" />
                            </a>
                        </div>
                        <div id="product-thumbnail" class="owl-carousel">
                            @foreach($pro_img as $value)
                            <div class="item">
                                <div class="image-additional">
                                    <a class="thumbnail" href="{{url($value->image)}}" data-lightbox="image-1"> <img src="{{url($value->image)}}" data-lightbox="roadtrip" /></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1 class="productpage-title">{{ $pro->name }}</h1>
                        <hr />
                   
                    <div class="d-flex">
                        <label class="productpage-price"><h1>Price : {{ $pro->discount }} ₹</h1></label> &nbsp; 
                            <span class="productinfo-tax"><s> {{ $pro->price }}</s></span>
                    </div>
                            
                    <hr />
                    <ul class="list-unstyled product_info">
                        <li>
                            <label>Category:</label>
                            <span> <a href="#">{{ $pro->subcat_name }}</a></span>
                        </li>
                        <li>
                            <label>Product Code:</label>
                            <span> {{ $pro->model_number }}</span>
                        </li>
                        <li>
                            <label>Availability:</label>
                            @if($pro->status == 'enable')
                            <span> In Stock</span>
                            @else
                            <span class="text-danger"> Our Stock</span>
                            @endif
                        </li>
                    </ul>
                    <hr />
                    <p class="product-desc">
                        {{ $pro->shot_description }}
                    </p>
                    <div id="product">
                        <div class="form-group">
                            <label class="control-label qty-label" for="input-quantity">Qty</label>
                            <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control productpage-qty" />
                            <input type="hidden" name="product_id" value="48" />
                            <div class="btn-group">
                                <button type="button" data-toggle="tooltip" class="btn btn-default wishlist" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-primary btn-lg btn-block addtocart">Add to Cart</button>
                                <!-- <button type="button" data-toggle="tooltip" class="btn btn-default compare" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="productinfo-tab">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                    <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-description">
                        <div class="cpt_product_description">
                            <div>
                                <p>{{ $pro->description }}</p>
                            </div>
                        </div>
                        <!-- cpt_container_end -->
                    </div>
                    <div class="tab-pane" id="tab-review">
                        <form class="form-horizontal" method="post" action="{{ url('/product/review') }}">@csrf
                            <div id="review"></div>
                            <input type="hidden" name="id" value="{{ $pro->id }}">
                            <input type="hidden" name="model_number" value="{{ $pro->model_number }}">
                            <h2>Write a review</h2>
                            <div class=" required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-name">Your Name</label>
                                    <input type="text" name="name" value="" id="input-name" class="form-control" />
                                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class=" required">
                                <div class="col-sm-12">
                                    <label class="control-label" for="input-review">Your Review</label>
                                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                    @error('text')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class=" required rating">
                                      <label>
                                        <input type="radio" name="stars" value="1" />
                                        <span class="icon">★</span>
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="2" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="3" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>   
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="4" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                      </label>
                                      <label>
                                        <input type="radio" name="stars" value="5" />
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                        <span class="icon">★</span>
                                      </label>
                                    &nbsp;
                            </div>
                            @error('stars')<span class="text-danger">{{ $message }}</span>@enderror
                            <div class="buttons clearfix">
                                <div class="pull-right">
                                    <button type="submit" name="submit" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                        <hr>

            <h3 class="productblock-title">Related Products</h3>
            <div class="box">
                <div id="related-slidertab" class="row owl-carousel product-slider owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper" style="width: 3360px; left: 0px; display: block;">
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-1-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-2-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-3-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-4-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-5-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-6-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 240px;">
                                <div class="item">
                                    <div class="product-thumb transition">
                                        <div class="image product-imageblock">
                                            <a href="#">
                                                <img src="{{url('front_assets/image/product/pro-7-220x294.jpg')}}" alt="women's New Wine is an alcoholic" title="women's New Wine is an alcoholic" class="img-responsive" />
                                            </a>
                                            <div class="button-group">
                                                <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                                <button type="button" class="addtocart-btn">Add to Cart</button>
                                                <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                        <div class="caption product-detail">
                                            <h4 class="product-name"><a href="product.html" title="women's New Wine is an alcoholic">women's New Wine is an alcoholic</a></h4>
                                            <p class="price product-price"><span class="price-new">$254.00</span> <span class="price-old">$272.00</span> <span class="price-tax">Ex Tax: $210.00</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button type="button" class="wishlist" data-toggle="tooltip" title="" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                                            <button type="button" class="addtocart-btn">Add to Cart</button>
                                            <button type="button" class="compare" data-toggle="tooltip" title="" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="owl-controls clickable">
                        <div class="owl-buttons">
                            <div class="owl-prev">prev</div>
                            <div class="owl-next">next</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection @section('js')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.js"></script>
<script>
    lightbox.option({
        resizeDuration: 200,
        wrapAround: true,
    });

    $(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
</script>

@endsection
