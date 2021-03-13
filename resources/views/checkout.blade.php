@extends('layouts.front_home')


@section('content')
<div class="container">
    <div class="row">
    @include('product_left_bar')
    <div class="col-sm-9" id="content">
                    <h1>Checkout</h1>
                        <div id="accordion" class="panel-group">
                           <div id="validaten_error"></div>
                            <form method="post" id="Checkout_form">
                                <div class="panel panel-default" id="steo_1">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#collapse-shipping-address" aria-expanded="false">Step 1: Delivery Details <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapse-shipping-address" role="heading" class="panel-collapse  collapse in" aria-expanded="false">
                                        <div class="panel-body">
                                            <form class="form-horizontal">
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" checked="checked" value="existing" name="shipping_address" />
                                                        I want to use an existing address
                                                    </label>
                                                </div>
                                                <div id="shipping-existing">
                                                    <select class="form-control" name="address">
                                                        <option selected="selected" value=""> --- Please Select --- </option>
                                                        @foreach($user_address as $val)
                                                        <option value="{{$val->id}}">{{$val->fname }} {{$val->lname}} ({{$val->address}})</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" value="new" name="shipping_address" />
                                                        I want to use a new address
                                                    </label>
                                                </div>
                                                <br />
                                                <div id="shipping-new" style="display: none;">
                                                    <div class="form-group required">
                                                        <label for="input-shipping-firstname" class="col-sm-2 control-label">First Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-firstname" placeholder="First Name" value="" name="firstname" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-shipping-lastname" class="col-sm-2 control-label">Last Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-lastname" placeholder="Last Name" value="" name="lastname" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-shipping-company" class="col-sm-2 control-label">Company</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-company" placeholder="Company" value="" name="company" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-shipping-address-1" class="col-sm-2 control-label">Address 1</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-address-1" placeholder="Address 1" value="" name="address_1" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input-shipping-address-2" class="col-sm-2 control-label">Address 2</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-address-2" placeholder="Address 2" value="" name="address_2" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-shipping-city" class="col-sm-2 control-label">City</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-city" placeholder="City" value="" name="city" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-shipping-postcode" class="col-sm-2 control-label">Post Code</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="input-shipping-postcode" placeholder="Post Code" name="postcode" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-shipping-country" class="col-sm-2 control-label">Country</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-control" id="input-shipping-country" name="country_id">
                                                                <option value=""> --- Please Select --- </option>
                                                                @foreach(get_countries() as $val)
                                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group required">
                                                        <label for="input-shipping-zone" class="col-sm-2 control-label">Region / State</label>
                                                        <div class="col-sm-10">
                                                            
                                                            <input type="text" class="form-control" id="input-shipping-State" placeholder="State" value="" name="state" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="buttons clearfix">
                                                    <div class="pull-right">
                                                        <input type="button" class="btn btn-primary address_btn" data-loading-text="Loading..." id="button-shipping-address" value="Continue" />
                                                    </div>
                                                </div>
                                            </form>
                                            <script type="text/javascript">
                                                $("input[name='shipping_address']").on("change", function () {
                                                    if (this.value == "new") {
                                                        $("#shipping-existing").hide();
                                                        $("#shipping-new").show();
                                                    } else {
                                                        $("#shipping-existing").show();
                                                        $("#shipping-new").hide();
                                                    }
                                                });
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <form method="post" name="payment" id="payment" action="/tets">
                                <input type="hidden" name="address_id" value="">
                                <div class="panel panel-default disabledbutton" id="steo_2">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-payment-method"  aria-expanded="false">Step 2: Payment Method <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapse-payment-method" role="heading" class="panel-collapse collapse" aria-expanded="false">
                                        <div class="panel-body">
                                            <p>Please select the preferred payment method to use on this order.</p>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" value="cod" name="payment_method" />
                                                    Cash On Delivery
                                                </label>
                                            </div>
                                              <div class="radio">
                                                <label>
                                                    <input type="radio" checked="checked" value="online" name="payment_method" />
                                                    Online Payment 
                                                </label>
                                            </div>
                                            <p><strong>Add Comments About Your Order</strong></p>
                                            <p>
                                                <textarea class="form-control" rows="8" name="comment"></textarea>
                                            </p>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default disabledbutton" id="steo_3">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapse-checkout-confirm" aria-expanded="true">Step 3: Confirm Order <i class="fa fa-caret-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapse-checkout-confirm" role="heading" class="panel-collapse collapse" aria-expanded="true" style="">
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <td width="30%" class="text-left">Product Name</td>
                                                            <td class="text-left">Model</td>
                                                            <td class="text-right">Quantity</td>
                                                            <td class="text-right">Unit Price</td>
                                                            <td class="text-right">Total</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($product as $val)
                                                            <tr>
                                                                <td class="text-left"><a href="http://localhost/opc001/index.php?route=product/product&amp;product_id=46">{{$val->name}}</a></td>
                                                                <td class="text-left">{{$val->attributes->model_number}}</td>
                                                                <td class="text-right">{{$val->quantity}}</td>
                                                                <td class="text-right">{{$val->price}}</td>
                                                                <td class="text-right">{{$val->quantity * $val->price}}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Sub-Total:</strong></td>
                                                            <td class="text-right">{{$sub_total}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Delivery Charges : </strong></td>
                                                            <td class="text-right">{{$delivery_charges}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-right" colspan="4"><strong>Total:</strong></td>
                                                            <td class="text-right">{{$sub_total + $delivery_charges}}</td>
                                                            <input type="hidden" name="total_amount" value="{{$sub_total + $delivery_charges}}">
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="buttons">
                                                
                                                <div class="pull-right">
                                            
                                                    <input type="button" data-loading-text="Loading..." class="btn btn-primary" id="pay_payment" name="submit" value="Confirm Order" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
    </div>
</div>
@endsection
@section('js')

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<script>
    $(".address_btn").click(function(e){
             var data = $('form').serialize();
            $.ajax({
               type:'POST',
               url:'{{ url("/checkout_address_chake") }}',
               // data:'_token = <?php echo csrf_token() ?>',
               data: data,
               success:function(data) {
                  $("#validaten_error").html('');
                    if (data.error) {
                      $("#validaten_error").html('<div class="alert alert-danger" role="alert">'+data.error+'</div>');
                    }else{
                        $('#steo_2').removeClass('disabledbutton');
                        $('#steo_3').removeClass('disabledbutton');
                        $('#steo_1').addClass('disabledbutton');
                        $('#collapse-shipping-address').removeClass('in');
                        $('#collapse-payment-method').addClass('in');
                        $('input[name=address_id]').val(data);
                    }

               }
            });
    });

</script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    $("#pay_payment").click(function(e){
        var data = $('#payment').serialize();
        // console.log(data);
        var address_id = $("input[name=address_id]").val();
        var payment_method = $("input[name=payment_method]:checked").val();
        var total = $("input[name=total_amount]").val();
        var comment = $("textarea[name=comment]").val();
        var csrf_token = $('meta[name="csrf-token"]').attr('content');

        if (payment_method == 'online') {
            e.preventDefault();
            var total_amount = total * 100;
            var options = {
                "key": "{{ env('RAZOR_KEY','rzp_test_InMkyYjiVS3O8y') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "INR",
                "name": "{{ sys_config('site_name') }}",
                // "description": "Test Transaction",
                "image": "{{ url(sys_config('logo')) }}",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:"{{ route('Razorpay_payment') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:total,address:address_id,comment:comment},
                        success:function(data){
                            // console.log('sdfsdf');
                            window.location.href = "{{url('/payment_success')}}?order="+data;
                           
                        }
                    });
                },
                // "prefill": {
                //     "name": "Mehul Bagda",
                //     "email": "mehul.bagda@example.com",
                //     "contact": "818********6"
                // },
                // "notes": {
                //     "address": "test test"
                // },
                "theme": {
                    "color": "#333"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();


        }else{
            // console.log('cod');

            $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
             $.ajax({
                        type:'POST',
                        url:"{{ route('payment_cod') }}",
                        data:{amount:total,address:address_id,comment:comment},
                        success:function(data){
                            // console.log(data);
                            window.location.href = "{{url('/payment_success')}}?order="+data;

                        }
                    });
        }
    });
</script>
@endsection
