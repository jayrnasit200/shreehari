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
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('/change_password') }}">@csrf
                <fieldset id="account">
                    <legend>Your Password</legend>
                    <div class="form-group required">
                        <label for="input-password" class="col-sm-2 control-label">Current Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input-password" placeholder="Current Password" value="{{ old('current_password') }}" name="current_password">
                        @error('current_password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                     <div class="form-group required">
                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                        @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group required">
                        <label for="input-confirm" class="col-sm-2 control-label">Password Confirm</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm_password">
                        @error('confirm_password')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </fieldset>
               
               
                <div class="buttons">
                    <div class="pull-right">
                        <input type="submit" class="btn btn-primary" value="Continue">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection @section('js')
@endsection
