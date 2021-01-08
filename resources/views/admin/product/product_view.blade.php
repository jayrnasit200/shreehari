@extends('layouts.admin')
 @section('css')
@endsection
 @section('content')
  @include('title.heading')

<section class="content">
    <div >
       
        <div class="col-md-12">
            


             <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="{{ url($products->image) }}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{url($products->image)}}" alt="Product Image"></div>
                @foreach($productsImages as $img)
                <div class="product-image-thumb"><img src="{{url($img->image)}}" alt="Product Image"></div>
                @endforeach
              </div>
            </div>
            <div class="col-12 col-sm-6">
        <a href="{{ url(admin().'product') }}" class="float-right"><i class="fas fa-long-arrow-alt-left"></i> Back</a>
              <h3 class="my-3">{{ $products->name }}</h3>
              <p>{{ $products->shot_description }}</p>

              <hr>
            

             

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  {{ $products->price }}
                </h2>
                <h4 class="mt-0">
                  <small>Discount Price: {{ $products->discount }} </small>
                </h4>
              </div>

             

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Review</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
             

              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. </div>

              <div class="tab-pane fade active show" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">{{ $products->description }}  </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
                

               
        </div>
      </form>
    </div>
</section>

@endsection
 @section('js')
   
@endsection
