@extends('layouts.vendor') @section('content') @include('title.heading')

<section class="content">
    <div class="container">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Profile</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data" action="{{ url(vendor().'profile_update') }}">@csrf
                    <div class="card-body">

                        
                         <div class="form-group">
                              <label for="bg_img">
                                @if(empty($vendor_data->bg_image))
                                <img src="https://images.squarespace-cdn.com/content/v1/5915dfadebbd1aff24f9f8dd/1496129155556-QFK0OAXPXW1KF0ROW5Z4/ke17ZwdGBToddI8pDm48kGuAixuZlvsWkJmUBdYWNOAUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYwL8IeDg6_3B-BRuF4nNrNcQkVuAT7tdErd0wQFEGFSnA_0Z5YWskxMQOUSKAL4vXFQkDh2RSyVTTRfuoxWj5kB4vrNkBXX0tbCV6bxMI0jYQ/bg-default.jpg?format=2500w" class="img-fluid">
                                @else
                                 <img src="{{url($vendor_data->bg_image)}}" class="img-fluid">
                                @endif
                            </label>
                            <input type="file" name="bg_img" class="d-none" id="bg_img" >
                            <div class="text-center">
                                <label for="pro_img">
                                     @if(empty($vendor_data->logo))
                                        <img src="https://www.stockvault.net//data/2018/08/28/254042/thumb16.jpg" for="profile_pci" width="200" class="img-fluid rounded-circle img-thumbnail">
                                       @else
                                         <img src="{{url($vendor_data->logo)}}" width="100" height="100" class="img-fluid rounded-circle img-thumbnail">
                                        @endif
                                 </label>
                            <input type="file" name="profile_pci" class="d-none" id="pro_img">
                            </div>
                        </div>


                              
                        <div class="form-group">
                            <label>Name </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"value="{{ old('name',user_data()->name) }}" placeholder="Enter name"   >
                        </div>
                         <div class="form-group">
                            <label>E-mail </label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" disabled readonley name="email"value="{{ old('email',user_data()->email) }}" placeholder="Enter email"   >
                        </div>
                        <div class="form-group">
                            <label>Phone </label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"value="{{ old('phone',user_data()->phone) }}" placeholder="Enter phone"   >
                         @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <label>About </label>
                            <textarea name="about" class="form-control">{{ old('about',$vendor_data->about) }}</textarea>
                         @error('about')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                       <div class="form-group">
                            <label>Address </label>
                            <textarea name="address" class="form-control">{{ old('address',$vendor_data->address) }}</textarea>
                         @error('address')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        


                    </div>
                  
                    <div class="card-footer con">
                        <a href="{{ url('product/type/sub_type') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
            </div>
        </div>
    </div>
</section>

@endsection
<script type="text/javascript">
$("input[type='image']").click(function() {
    $("input[id='my_file']").click();
});
</script>