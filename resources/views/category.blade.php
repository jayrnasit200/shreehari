@extends('layouts.front_home') @section('content')
<div class="container">
    <div class="row">
    @include('product_left_bar')
    <div id="content" class="col-sm-9">
        <!-- <h2 class="category-title">Desktops</h2> -->
        <div class="row category-banner">
            <!-- <div class="col-sm-12 category-image"><img src="image/banners/category-banner.jpg" alt="Desktops" title="Desktops" class="img-thumbnail" /></div> -->
            <!-- <div class="col-sm-12 category-desc">
                Lorem ipsum dolomagna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
            </div> -->
        </div>
        <div class="category-page-wrapper">
            <div class="col-md-6 list-grid-wrapper">
                <div class="btn-group btn-list-grid">
                    <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                    <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
                <a href="#" id="compare-total">Product Compare ({{$prod_count}})</a>
            </div>
            <div class="col-md-1 text-right page-wrapper"></div>
            <div class="col-md-2 text-right sort-wrapper">
                <label class="control-label" for="input-sort">Sort By :</label>
                <div class="sort-inner">
                    <select id="input-sort" class="form-control">
                        <option value="ASC" selected="selected">Default</option>
                        <option value="ASC">Name (A - Z)</option>
                        <option value="DESC">Name (Z - A)</option>
                        <option value="ASC">Price (Low &gt; High)</option>
                        <option value="DESC">Price (High &gt; Low)</option>
                        <option value="DESC">Rating (Highest)</option>
                        <option value="ASC">Rating (Lowest)</option>
                        <option value="ASC">Model (A - Z)</option>
                        <option value="DESC">Model (Z - A)</option>
                    </select>
                </div>
            </div>
        </div>
        <br />
        <div class="grid-list-wrapper">
            @foreach($products as $pro)

            <div class="product-layout product-list col-xs-12" id="product_page_pro">
                <div class="product-thumb">
                    <div class="image product-imageblock">
                        <a href="{{ url('product',$pro->model_number) }}"> <img src="{{ url($pro->image) }}" class="pro_img img-responsive" /> </a>
                        <div class="button-group">
                            <!-- <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button> -->
                            <button type="button" id="{{$pro->id}}" class="addtocart-btn">Add to Cart</button>
                            <!-- <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button> -->
                        </div>
                    </div>
                    <div class="caption product-detail">
                        <h4 class="product-name"><a href="{{ url('product',$pro->model_number) }}" title="lorem ippsum dolor dummy">@php echo substr( $pro->name,0,23)@endphp.</a></h4>

                        <p class="price product-price"><span class="price-old">{{ $pro->discount }} ₹</span> {{ $pro->price }} ₹</p>
                    </div>
                    <div class="button-group">
                        <!-- <button type="button" class="wishlist" data-toggle="tooltip" title="Add to Wish List"><i class="fa fa-heart-o"></i></button> -->
                        <button type="button" id="{{$pro->id}}" class="addtocart-btn">Add to Cart</button>
                        <!-- <button type="button" class="compare" data-toggle="tooltip" title="Compare this Product"><i class="fa fa-exchange"></i></button> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="category-page-wrapper">
            <div class="pagination-inner">
                {{ $products->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
@section('js')

@endsection
