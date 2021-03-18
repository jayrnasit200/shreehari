@extends('layouts.admin')

@section('content')
    @include('title.heading')
    <section class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-primary">
              <span class="info-box-icon"><i class="fas fa-boxes"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Product</span>
                <span class="info-box-number">{{$total_products}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Users</span>
                <span class="info-box-number">{{$total_users}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-user-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Vendors</span>
                <span class="info-box-number">{{$total_vendors}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="ion ion-bag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Orders</span>
                <span class="info-box-number">{{$total_orders}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-default">
              <span class="info-box-icon"><i class="fas fa-hand-holding-usd"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Sell </span>
                <span class="info-box-number">{{$total_sell}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-secondary">
              <span class="info-box-icon"><i class="ion ion-bag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Reviews</span>
                <span class="info-box-number">{{$total_reviews}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-dark">
              <span class="info-box-icon"><i class="fa fa-list-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Category</span>
                <span class="info-box-number">{{$total_Category}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="fas fa-align-left"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Subcategory</span>
                <span class="info-box-number">{{$total_Subcategory}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

        </div>
    </section>
@endsection
