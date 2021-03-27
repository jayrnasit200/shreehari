@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>

.login,
.image {
  min-height: 100vh;
}

.bg-image {
 background-image: url('https://res.cloudinary.com/mhmd/image/upload/v1555917661/art-colorful-contemporary-2047905_dxtao7.jpg');
  /*background-image: url('https://source.unsplash.com/1600x900/?phone,laptop');*/
  background-size: cover;
  background-position: center center;
}
</style>


<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="col-12">
                <!-- Demo content-->
                <div class="container">
                    <div class="row">

          </div>
        </div>
        </section>
  
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            @if(session()->get('msg_s'))
                            <div class="alert alert-success alert-dismissible" id="mydiv">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session()->get('msg_s') }} 
                            </div>
                            @endif
                            @if(session()->get('error'))
                             <div class="alert alert-danger alert-dismissible" id="mydiv">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                {{ session()->get('error') }} 
                              </div>
                            @endif
                            <h3 class="display-4">ShreeHari </h3>
                            <p class="text-muted mb-4"> Login Your Acount</p>
                            <form method="POST" action="{{ route('login') }}">
                              @csrf
                                <div class="form-group mb-3">

                                     <input id="email" type="email" class="form-control rounded-pill border-0 shadow-sm px-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email" autofocus>
                                     @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                                </div>
                               
                                <button type="submit" class="btn btn-outline-success btn-block text-uppercase mb-2 rounded-pill shadow-sm">{{ __('Login') }}</button>
                                <hr>
                                <a href="{{ url('/auth/google') }}" class="btn btn-outline-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm"><img src="https://img.icons8.com/fluent/344/google-logo.png" width="20" height="20"> google</a>
                                <div class="text-center d-flex justify-content-between mt-4">
                                  @if (Route::has('password.request'))
                                    <!-- <a class="font-italic text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                                @endif
                                <br>
                                <a href="{{ route('register') }}" class="font-italic text-muted">Register a new membership</a>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





<script type="text/javascript">
  setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 3000); // <-- time in milliseconds
</script>








@endsection
