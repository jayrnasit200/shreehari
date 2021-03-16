@extends('layouts.front_home') @section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" />

@endsection @section('content')
<div class="container">

    <div class="row">
    @include('Account_left_bar')
       <div class="col-sm-9" id="content">
              @if(session()->get('msg_s'))
         <div class="alert alert-success alert-dismissible" id="msg">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  {{ session()->get('msg_s') }} 
            </div>
  @endif
                <fieldset id="account">
                    <legend>Your Order Details</legend>
                    <div class="form-group ">
                        <div class="">
                     
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th>Invoice Number</th>
                                         <th>Payment Method</th>
                                         <th>Payment Type</th>
                                         <th>Amount</th>
                                         <th>Status</th>
                                         <th>Order Date</th>
                                     </tr>
                                 </thead>

                                 <tbody> 
                                    @if(empty($order))
                                        <tr>
                                            <td class="text-center" colspan="5">Order History Is Empty</td>
                                        </tr>
                                    @else
                                        @foreach($order as $val)
                                      <tr>
                                         <td>{{$val->invoice_number}}</td>
                                         @if(empty($val->payment_id))
                                         <td>online payment</td>
                                         @else
                                         <td>cod</td>
                                         @endif
                                         <td>{{$val->pay_status}}</td>
                                         <td>{{$val->amount}}</td>
                                         <td>{{$val->status}}</td>
                                         <td>{{$val->created_at}}</td>
                                     </tr>
                                     @endforeach
                                     @endif
                                 </tbody>
                             </table>
                        </div>
                    </div>
         
                </fieldset>
               
              
        </div>
    </div>
</div>

@endsection @section('js')
@endsection
