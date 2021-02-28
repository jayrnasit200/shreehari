@extends('layouts.front_home') @section('content')
<div class="container">
    <div class="row">
    @include('product_left_bar')
       <div class="col-sm-9" id="content">
          @if(session()->get('msg_s'))
            <div class="alert alert-success" id="msg" role="alert">
              {{ session()->get('msg_s') }} 
            </div>
          @endif
        
          <h1>Shopping Cart &nbsp; </h1>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Image</td>
                    <td class="text-left">Product Name</td>
                    <td class="text-left">Quantity</td>
                    <td class="text-right">Unit Price</td>
                    <td class="text-right">Total</td>
                  </tr>
                </thead>
                <tbody>
                    @if($sub_total == 0)
                        <tr>
                            <td class="text-center" colspan="5">Cart Is Empty</td>
                        </tr>
                    @else
                        @foreach($product as $val)
                          <tr>
                            <form method="post" action="{{ url('/cart_update') }}">@csrf
                                <td class="text-center"><a href="{{ url('/product',$val->attributes->model_number) }}"><img class="img-thumbnail" style=" max-height: 100px;" src="{{ url($val->attributes->image) }}"></a></td>
                                <td class="text-left"><a href="{{ url('/product',$val->attributes->model_number) }}">{{$val->name}}</a></td>
                                <td class="text-left"><div style="max-width: 200px;" class="input-group btn-block">
                                    <input type="text" class="form-control quantity" size="1" value="{{$val->quantity}}" name="quantity">
                                    <input type="hidden" name="id" value="{{$val->id}}">
                                    <span class="input-group-btn">
                                    <button class="btn btn-primary"  data-toggle="tooltip" type="submit" name="submit" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                    <a href="{{ url('cart_remove',$val->id) }}"><button  class="btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button></a>
                                    </span></div></td>
                                <td class="text-right">{{$val->price}}&nbsp;X&nbsp;{{$val->quantity}}</td>
                                <td class="text-right">{{ ($val->price*$val->quantity) }}</td>
                            </form>
                          </tr>
                        @endforeach
                    @endif
                </tbody>
              </table>
            </div>
          <h2>What would you like to do next?</h2>
          <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
          <div id="accordion" class="panel-group">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle" href="#collapse-coupon">Use Coupon Code <i class="fa fa-caret-down"></i></a></h4>
              </div>
              <div class="panel-collapse collapse" id="collapse-coupon">
                <div class="panel-body">
                  <label for="input-coupon" class="col-sm-3 control-label">Enter your coupon here</label>
                  <div class="input-group">
                    <input type="text" class="form-control" id="input-coupon" placeholder="Enter your coupon here" value="" name="coupon">
                    <span class="input-group-btn">
                    <input type="button" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Apply Coupon">
                    </span></div>
                </div>
              </div>
            </div>
            
          </div>
          <br>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td class="text-right"><strong>Sub-Total:</strong></td>
                    <td class="text-right">{{$sub_total}}</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                    <td class="text-right">$2.00</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Discount:</strong></td>
                    <td class="text-right">$42.00</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Total:</strong></td>
                    <td class="text-right">$254.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-left"><a class="btn btn-default" href="{{ url('/') }}">Continue Shopping</a></div>
            <div class="pull-right"><a class="btn btn-primary" href="checkout.html">Checkout</a></div>
          </div>
        </div>
    </div>
</div>
@endsection
