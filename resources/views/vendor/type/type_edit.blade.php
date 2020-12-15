@extends('layouts.vendor') @section('content') @include('title.heading')

<section class="content">
    <div class="container">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Type</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" action="{{ url('product/type/update') }}">@csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Types Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name',$get->name) }}" placeholder="Enter Types Name" />
                         @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $get->id }}">
                    <div class="card-footer con">
                        <a href="{{ url('product/type/list') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

                <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
            </div>
        </div>
    </div>
</section>

@endsection
