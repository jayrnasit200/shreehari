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
        <p class="mb-0">Invoice Number - 16835</p>
      </div>
    </div>
    <hr>
  </header>
  
  <!-- Main Content -->
  <main>
    <div class="row">
      <div class="col-sm-6 text-sm-right order-sm-1"> <strong>Pay To:</strong>
        <address>
        Koice Inc<br />
        2705 N. Enterprise St<br />
        Orange, CA 92865
        </address>
      </div>
      <div class="col-sm-6 order-sm-0"> <strong>Invoiced To:</strong>
        <address>
        Smith Rhodes<br />
        15 Hodges Mews, High Wycombe<br />
        HP12 3JL<br />
        United Kingdom
        </address>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 mb-3"> <strong>Payment Method:</strong><br>
        <span>Credit Card</span> </div>
      <div class="col-sm-6 mb-3 text-sm-right"> <strong>Booking Date:</strong><br>
        <span>07/11/2019</span> </div>
    </div>
    <div class="card">
      <div class="card-header"> <span class="font-weight-600 text-4">Booking Summary</span> </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <td class="col-6 border-top-0"><strong>Flight Details</strong></td>
                <td class="col-2 text-center border-top-0"><strong>Base Fare</strong></td>
                <td class="col-2 text-center border-top-0"><strong>Taxes & Fee</strong></td>
                <td class="col-2 text-right border-top-0"><strong>Amount</strong></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span class="text-3"><span class="font-weight-500">Indigo 6E-2726</span> - Delhi to Sydney</span> <br>
                  Travel Date - Sat, 15 Jun 19, 01:50 hrs <br>
                  Smith Rhodes </td>
                <td class="text-center">$980.00</td>
                <td class="text-center">0</td>
                <td class="text-right">$980.00</td>
              </tr>
              <tr>
                <td><span class="text-3"><span class="font-weight-500">JetAirways MD-270</span> - Sydney to Delhi</span> <br>
                  Travel Date - Mon, 01 July 19, 19:38 hrs <br>
                  Smith Rhodes </td>
                <td class="text-center">$999.00</td>
                <td class="text-center">0</td>
                <td class="text-right">$999.00</td>
              </tr>
              <tr>
                <td colspan="2" class="bg-light-2 text-right"><strong>Sub Total</strong></td>
                <td colspan="2" class="bg-light-2 text-right">$1979.00</td>
              </tr>
              <tr>
                <td colspan="2" class="bg-light-2 text-right"><strong>Promotional Code:</strong><br>
                  <span class="text-1">summerfun - 20.00% One Time Discount</span></td>
                <td colspan="2" class="bg-light-2 text-right">-$395.80</td>
              </tr>
              <tr>
                <td colspan="2" class="bg-light-2 text-right"><strong>Total</strong></td>
                <td colspan="2" class="bg-light-2 text-right">$1583.20</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <br>
    <div class="table-responsive d-print-none">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td class="text-center"><strong>Transaction Date</strong></td>
            <td class="text-center"><strong>Gateway</strong></td>
            <td class="text-center"><strong>Transaction ID</strong></td>
            <td class="text-center"><strong>Amount</strong></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-center">07/11/2019</td>
            <td class="text-center">Credit Card</td>
            <td class="text-center">3912912704</td>
            <td class="text-center">$1583.20 USD</td>
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
<p class="text-center d-print-none"><a href="#">&laquo; Back to My Account</a></p>
</div>
@endsection
@section('js')

@endsection
