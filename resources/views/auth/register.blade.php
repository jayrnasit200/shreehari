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

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">ShreeHari </h3>
                            <p class="text-muted mb-4"> {{ __('Register') }} Your Acount</p>
                             <form method="POST" action="{{ route('register') }}">
                              @csrf
                                <div class="form-group mb-3">
                                    <input id="name" type="text" class="form-control rounded-pill border-0 shadow-sm px-4  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" placeholder="Full name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group mb-3">
                                     <input id="email" type="email" class="form-control rounded-pill border-0 shadow-sm px-4  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                               
                               <div class="form-group mb-3">
                                    <input id="password" type="password" class="form-control rounded-pill border-0 shadow-sm px-4 @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>

                                <div class="form-group mb-3">
                                    <input id="password-confirm" type="password" class="form-control rounded-pill border-0 shadow-sm px-4" name="password_confirmation"  autocomplete="new-password" placeholder="Retype password">

                                  
                                </div>
                                <button type="submit" class="btn btn-outline-success btn-block text-uppercase mb-2 rounded-pill shadow-sm">{{ __('Register') }}</button>
                                <hr>
                                <a href="{{ url('/auth/google') }}" class="btn btn-outline-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm"><img src="https://img.icons8.com/fluent/344/google-logo.png" width="20" height="20"> google</a>
                                <a href="{{ route('login') }}" class="font-italic text-muted">Login Account</a>
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

@endsection
