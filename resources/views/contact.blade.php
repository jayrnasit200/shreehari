@extends('layouts.front_home') @section('content')
<div class="container">
    <div class="row">
    @include('product_left_bar')
       <div class="col-sm-9" id="content">
      <h1>Contact Us</h1>
          @if(session()->get('msg_s'))
            <div class="alert alert-success" id="msg" role="alert">
              {{ session()->get('msg_s') }} 
            </div>
          @endif
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            
           <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3302918836484!2d72.79196711476527!3d21.139249985938662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e3e98bd58bf78ae!2sMahavir%20Swami%20College%20of%20Polytechnic!5e0!3m2!1sen!2sin!4v1615890165136!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              </div>
          </div>
        </div>
      </div>
      <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('/contact') }}">@csrf
        <fieldset>
          <h3>Contact Form</h3>
          <div class="form-group required">
            <label for="input-name" class="col-sm-2 control-label">Your Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="input-name" value="" name="name">
              @error('name')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
          </div>
          <div class="form-group required">
            <label for="input-email" class="col-sm-2 control-label">E-Mail Address</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="input-email" value="" name="email">
              @error('email')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
          </div>
          <div class="form-group required">
            <label for="input-enquiry" class="col-sm-2 control-label">Massage</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="input-enquiry" rows="10" name="massage"></textarea>
              @error('massage')<span class="text-danger">{{ $message }}</span>@enderror
            </div>
          </div>
        </fieldset>
        <div class="buttons">
          <div class="pull-right">
            <input type="submit" value="Submit" class="btn btn-primary">
          </div>
        </div>
      </form>
    </div>
    </div>
</div>
@endsection
