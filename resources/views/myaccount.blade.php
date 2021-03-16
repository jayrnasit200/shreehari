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
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ url('/myaccount') }}">@csrf
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div style="display: none;" class="form-group required">
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" checked="checked" value="1" name="customer_group_id">
                                    Default</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-firstname" class="col-sm-2 control-label"> Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Name" value="{{Auth::user()->name}}" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-lastname" class="col-sm-2 control-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="E-mail" value="{{Auth::user()->email}}" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input-phone" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="input-phone" placeholder="Phone" value="{{Auth::user()->phone}}" name="phone">
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
