@extends('layouts.front_home')
@section('css')

@endsection
@section('content')
<div class="container invoice-container"> 
  <!-- Header -->
  <header>
    <div class="row align-items-center">
      <div class="col-sm-7 text-sm-left mb-3 mb-sm-0" id="logo"> <a href="{{ url('/') }}"><img  src="{{ url(sys_config('logo')) }}" title="Koice" class="logo" alt="Koice" /></a> </div>
      <div class="col-sm-5 text-right text-sm-right">
        <h4 class="mb-0">Invoice</h4>
        <p class="mb-0">Invoice Number - {{ $order->invoice_number }}</p>
      </div>
    </div>
    <hr>
  </header>
  
  <!-- Main Content -->
  <main>
    <div class="row">
        
      <div class="col-sm-6 order-sm-0"> <strong>Address To:</strong>
        <address>
       {{ $Address->fname}} {{ $Address->lname}}<br />
        {{ $Address->address}}<br />
        {{ $Address->address_2}}<br />
        {{ $Address->city}} {{ $Address->post_code}}
        </address>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 mb-3"> <strong>Payment Method:</strong><br>
        @if(empty($order->payment_id))
          <span>COD</span> 
          <span class="text-danger">(padding)</span> 
          @else
          <span>Online Payment</span> 
        @endif
      </div>
      <div class="col-sm-6 mb-3 text-sm-right"> <strong>Booking Date:</strong><br>
        <span>{{ $order->created_at }}</span> </div>
    </div>
    <div class="card" style="margin-top: 20px;">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table ">
            <thead>
              <tr>
                <td class="col-6 border-top-0"><strong>Product Details</strong></td>
                <td class="col-2 text-center border-top-0"><strong>Base Fare</strong></td>
                <td class="col-2 text-center border-top-0"><strong>Qty</strong></td>
                <td class="col-2 text-right border-top-0"><strong>Amount</strong></td>
              </tr>
            </thead>
            <tbody>
              @foreach($OrdersProduct as $val)
              @php $pro = product_data($val->products_id) @endphp
              <tr>
                <td><span class="text-3"><span class="font-weight-500">{{ $pro->name }}</td>
                <td class="text-center">{{ $pro->price }}</td>
                <td class="text-center">{{ $val->qty }}</td>
                <td class="text-right">{{ $pro->price * $val->qty }}</td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
          <hr>
        </div>
      </div>
    </div>
    <br>
    <div class="table-responsive d-print-none">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td class="text-center"><strong>Gateway</strong></td>
            <td class="text-center"><strong>Transaction ID</strong></td>
            <td class="text-center"><strong>Amount</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">@if(empty($order->payment_id))
                      <span>COD</span>
                      <span class="text-danger">(padding)</span> 
                      @else
                      <span>Online Payment</span> 
                    @endif</td>
            <td class="text-center">{{ $order->invoice_number }}</td>
            <td class="text-center">{{ $order->amount }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
  <!-- Footer -->
  <footer class="text-right">
    <p class="text-1"><strong>NOTE :</strong> This is computer generated receipt and does not require physical signature.</p>
    <div class="btn-group btn-group-sm d-print-none"> <a href="#" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
<!-- Back to My Account Link -->
<p class="text-center d-print-none"><a href="{{url('/')}}">&laquo; Back to My Account</a></p>
</div>
@endsection
@section('js')

@endsection
