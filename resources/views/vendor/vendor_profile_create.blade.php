@extends('layouts.vendor') @section('content') @include('title.heading')

<section class="content">
    <div class="container">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Sub Type</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" action="{{ url('product/type/sub_type/update') }}">@csrf
                    <div class="card-body">

                        
                         <div class="form-group">
                            <img src="https://images.squarespace-cdn.com/content/v1/5915dfadebbd1aff24f9f8dd/1496129155556-QFK0OAXPXW1KF0ROW5Z4/ke17ZwdGBToddI8pDm48kGuAixuZlvsWkJmUBdYWNOAUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYwL8IeDg6_3B-BRuF4nNrNcQkVuAT7tdErd0wQFEGFSnA_0Z5YWskxMQOUSKAL4vXFQkDh2RSyVTTRfuoxWj5kB4vrNkBXX0tbCV6bxMI0jYQ/bg-default.jpg?format=2500w" for="bg_img" class="img-fluid">
                        <input type="file" name="bg_img" id="my_file" >
                        </div>
                              
                        <div class="form-group">
                            <label for="exampleInputEmail1">Coler </label>
                            <input type="color" class="form-control @error('color') is-invalid @enderror" name="color"value="{{ old('color') }}" placeholder="Enter color"   >
                            
                            <!-- <input type="text" class="form-control @error('color') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Types Name" /> -->
                         @error('color')<span class="text-danger">{{ $message }}</span>@enderror
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