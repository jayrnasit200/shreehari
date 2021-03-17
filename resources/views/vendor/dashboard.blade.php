@extends('layouts.vendor')

@section('content')
    @include('title.heading')
    <section class="content">
      <div class="container-fluid">
      	 @if(!auth()->user()->phone) 
      	<div class="alert alert-danger" role="alert">
      		<h1>Warning</h1>
			  Profile Compulsory Required.
			  <div class="text-right">
			  	<a href="{{ url('vendor/profile') }}" class="btn btn-warning">Profile view </a>
			  </div>
			</div>
		@endif
        <div class="row">

          <div class="col-lg-3 col-6">
           <div class="info-box mb-3 bg-primary">
              <span class="info-box-icon"><i class="ion ion-person-add"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Padding Orders</span>
                <span class="info-box-number">{{ $orders_packing }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

           <div class="col-lg-3 col-6">
           <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="ion ion-bag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Orders</span>
                <span class="info-box-number">{{ $orders }}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

           <div class="col-lg-3 col-6">
           <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Happy Customers</span>
                <span class="info-box-number">{{$Happy_Customers}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

           <div class="col-lg-3 col-6">
           <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-boxes"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Products</span>
                <span class="info-box-number">{{$Products}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>
  

        </div>
        <div class="row">
          <div class="col">
                 <!-- BAR CHART -->
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Bar Chart</h3>

                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="chart">
                            <canvas id="barChart" style="height:230px; min-height:230px"></canvas>
                          </div>
                        </div>
                        <!-- /.card-body -->
                      </div>
                      <!-- /.card -->
          </div>
          <div class="col">
            
          </div>
        </div>
    </section>
@endsection
@section('js')

@endsection
