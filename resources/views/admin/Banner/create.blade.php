@extends('layouts.admin') 
@section('content') 
@include('title.heading')

<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">{{$titel}}</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data" action="{{ url(admin().'banners/add') }}">@csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Select Type</label>
                              <select name="type" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        <option value="banner" @if(old('type') == 'banner') selected @endif>Banner</option>
                                        <option value="logo" @if(old('type') == 'logo') selected @endif>Logo</option>
                                         
                                      </select>
                             @error('type')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                                    <input type="file" class="form-control" id="file" onchange="previewImage();"  name="image" placeholder="Enter Name" value="{{ old('image') }}">
                             @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                             <b>NOTE: Banner image size required 1180X620.</b>


                    </div>
                    <div class="card-footer con">
                        <a href="{{ url('product/type/sub_type') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-default">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPvlmYJUQmx55XV7mD_INQCHIA1NXMrXuE8A&usqp=CAU" id="preview" class="img-fluid img-thumbnail">
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->



 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->


  <script>
        function previewImage() {
            var file = document.getElementById("file").files;
            if (file.length > 0) {
                var fileReader = new FileReader();

                fileReader.onload = function (event) {
                    document.getElementById("preview").setAttribute("src", event.target.result);
                };

                fileReader.readAsDataURL(file[0]);
            }
        }
    </script>

    

@endsection