@extends('layouts.vendor') @section('content') @include('title.heading')

<section class="content">
    <div class="container">
        <div class="col-md-6">
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
                                
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" name="coler_type" id="customSwitch1" @if($get_data->color) checked @endif>
                                    <label class="custom-control-label" for="customSwitch1">Coler Available</label>
                                </div>
                             @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Coler </label>
                            <input type="color" class="form-control @error('color') is-invalid @enderror" name="color"value="{{ old('color',$get_data->color) }}" placeholder="Enter color"   >
                            
                            <!-- <input type="text" class="form-control @error('color') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Types Name" /> -->
                         @error('color')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                        

                             <div class="form-group">
                                
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" @if($get_data->size) checked @endif name="size_available" id="customSwitch2">
                                    <label class="custom-control-label" for="customSwitch2">Size Available</label>
                                </div>
                             @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                            </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Size</label>
                            <input type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size',$get_data->size) }}" placeholder="Enter Size" />
                         @error('size')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1">Size Types</label>
                            <input type="text" class="form-control @error('size_type') is-invalid @enderror" name="size_type" value="{{ old('size_type',$get_data->size_type) }}" placeholder="Enter Size Types" />
                         @error('size_type')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>

                    </div>
                    <input type="hidden" name="id" value="{{$id}}">
                    <input type="hidden" name="type_id" value="{{$get_data->type_id}}">
                    <div class="card-footer con">
                        <a href="{{ url('product/type/sub_type',$id) }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
            </div>
        </div>
    </div>
</section>

@endsection
