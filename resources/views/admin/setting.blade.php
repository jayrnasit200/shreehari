@extends('layouts.admin') 
@section('content') 
@include('title.heading')

<section class="content">
    <div class="container">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Setting</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data" action="{{ url(admin().'setting') }}">
                    @csrf
                            <div class="card-body">
                                <div class="form-group">
                                        <label>Site Name</label>
                                        <input type="text" class="form-control @error('site_name') is-invalid @enderror" name="site_name" placeholder="Enter Name" value="{{ old('site_name',sys_config('site_name')) }}" />
                                        @error('site_name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label>Phone</label>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="Enter Name" value="{{ old('phone',sys_config('phone')) }}" />
                                        @error('phone')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col">
                                        <label>Email</label>
                                        <input type="text" class="form-control @error('from_email_address') is-invalid @enderror" name="from_email_address" placeholder="Enter Name" value="{{ old('from_email_address',sys_config('from_email_address')) }}" />
                                        @error('from_email_address')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label>Copyright Text</label>
                                        <input type="text" class="form-control @error('copyright_text') is-invalid @enderror" name="copyright_text" placeholder="Enter Name" value="{{ old('copyright_text',sys_config('copyright_text')) }}" />
                                        @error('copyright_text')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                 <div class="row">
                                    <div class="form-group col">
                                        <label>Logo</label>
                                        <input type="file" class="form-control " name="Logo" />
                                        @error('logo')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col">
                                        <img src="{{url(sys_config('logo'))}}" id="logo" class="img-thumbnail img-fluid w-50">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label>facebook</label>
                                        <input type="url" class="form-control @error('facebook') is-invalid @enderror" name="facebook" placeholder="Enter Name" value="{{ old('facebook',sys_config('facebook')) }}" />
                                        @error('facebook')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col">
                                        <label>linkedin</label>
                                        <input type="url" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" placeholder="Enter Name" value="{{ old('linkedin',sys_config('linkedin')) }}" />
                                        @error('linkedin')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label>twitter</label>
                                        <input type="url" class="form-control @error('twitter') is-invalid @enderror" name="twitter" placeholder="Enter Name" value="{{ old('twitter',sys_config('twitter')) }}" />
                                        @error('twitter')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col">
                                        <label>youtube</label>
                                        <input type="url" class="form-control @error('youtube') is-invalid @enderror" name="youtube" placeholder="Enter Name" value="{{ old('youtube',sys_config('youtube')) }}" />
                                        @error('youtube')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="form-group col">
                                        <label>instagram</label>
                                        <input type="url" class="form-control @error('instagram') is-invalid @enderror" name="instagram" placeholder="Enter Name" value="{{ old('instagram',sys_config('instagram')) }}" />
                                        @error('instagram')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="form-group col">
                                        <label>Delivery Charges</label>
                                        <input type="number" class="form-control @error('delivery_charges') is-invalid @enderror" name="delivery_charges" placeholder="Enter Name" value="{{ old('delivery_charges',sys_config('delivery_charges')) }}" />
                                        @error('delivery_charges')<span class="text-danger">{{ $message }}</span>@enderror
                                    </div>
                                </div>  
                            </div>
                    <div class="card-footer con">
                        <a href="{{ url('product/type/sub_type') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection
