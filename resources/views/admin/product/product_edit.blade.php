@extends('layouts.admin')
 @section('css')
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
@endsection
 @section('content')
  @include('title.heading')

<section class="content">
    <div >
      <form method="post" enctype="multipart/form-data"  action="{{ url(admin().'product/update') }}">
        {{ csrf_field() }}
               
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Product</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>


              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Details</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Dicaripsan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Price</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill" href="#custom-tabs-three-settings" role="tab" aria-controls="custom-tabs-three-settings" aria-selected="false">Image</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-three-tabContent">
                  <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                     <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control @error('color') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name',$products->name) }}">
                                     @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>categories</label>
                                    <select name="categories" id="categories" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        @foreach ($categories as  $value)
                                         @if(old('categories',$products->categories_id)==$value->id)
                                          <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                          @else
                                          <option value="{{$value->id}}" >{{$value->name}}</option>
                                          @endif
                                        @endforeach
                                      </select>
                                     @error('categories')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                 <div class="form-group">
                                    <label>subcategories</label>
                                    <select name="subcategories" id="subcategories" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        <!-- <option>Alaska</option> -->
                                        
                                      </select>
                                     @error('subcategories')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                 

                                

                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">
                        <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Short Dicaripsan</label>
                                    <input type="text" name="short_dicaripsan" class="form-control @error('short_dicaripsan') is-invalid @enderror" placeholder="Enter Name" value="{{ old('short_dicaripsan',$products->shot_description) }}">
                                     @error('short_dicaripsan')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                               <div class="form-group">
                                    <label>Dicaripsan</label>
                                    <textarea name="dicaripsan" placeholder="Enter Dicaripsan" class="form-control">{{ old('dicaripsan',$products->description) }}</textarea>
                                     @error('dicaripsan')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                             
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">
                      <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>price</label>
                                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price" value="{{ old('price',$products->price) }}">
                                     @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                 <div class="form-group">
                                    <label>discount</label>
                                    <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" placeholder="Enter discount" value="{{ old('discount',$products->discount) }}">
                                     @error('discount')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                             
                            </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel" aria-labelledby="custom-tabs-three-settings-tab">
                      <div class="container">
                        <div class="row">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Images</label>
                                    <img src="{{ url($products->image) }}" class="profile-img img-fluid float-right" id="preview" height="150" width="150" />
                                    <div>
                                    <input type="hidden" name="old_image" id="file" value="{{ $products->image }}" />
                                    <input type="File" name="image" id="file" onchange="previewImage();" class="" />
                                     @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                   </div>
                                </div>

                       </form>
                       <div class="mb-5 mr-3 p-5 w-75 border border-dark">
                       <form method="post" action="{{ url(admin().'product/img/add') }}" enctype="multipart/form-data">@csrf
                                  <div class="form-group"><label>More Images</label><div>
                                    <input type="hidden" name="id" value="{{ $products->id }}">
                                    <input type="File"  id="images" name="all_img[]" onchange="preview_images();" multiple class="" />
                                     @error('all_img')<span class="text-danger">{{ $message }}</span>@enderror
                                   </div>
                                   <input type="submit" name="submit" class="btn btn-primary float-right">
                                    <div class="row" id="image_preview"></div>
                                </div>
                              </form>
                            </div>
                                <form method="post" action="{{ url(admin().'product/img/delete') }}">@csrf
                                <table class="table">
                                  <tr>
                                    <th><div class="container"><input type="submit" name="submit" value="Delete" class="btn btn-danger"></th>
                                    <th>Images</th>
                                  </tr>
                                  @foreach($productsImages as $img)
                                  <tr>
                                    <td><input type="checkbox" name="delete[]" value="{{$img->id}}"></td>
                                    <td><img src="{{ url($img->image) }}" width="70"></td>
                                  </tr>
                                  @endforeach
                                </table>
                              
                          </form>
                            </div>
                        </div>
                     </div> 
                  </div>
                </div>
          
                  <input type="hidden" name="id" value="{{ $products->id }}">
                    </div>
                    <div class="card-footer con">
                        <a href="{{ url('product/type/list') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                

                <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
            </div>
        </div>
    </div>
</section>
@php
$categories=$products->categories_id;
@endphp
@endsection
 @section('js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->



 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://www.expertphp.in/js/jquery.form.js"></script>


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

    <script>
    function preview_images() 
    {
     var total_file=document.getElementById("images").files.length;
     for(var i=0;i<total_file;i++)
     {
      $('#image_preview').append("<div class='col-md-2 m-1'><img class='img-responsive img-fluid ' height='150' width='150' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
     }
    }
</script>

  <script>

      var   categories_id = $("#categories").val();
      categories( categories_id);

      $("#categories").on('change',function(){
        var   categories_id = $(this).val();
        categories( categories_id);
      });

      function categories(  categories_id){
        if( categories_id != ""){
          $.ajax({
            url: "{!! url(admin().'product/subcategories') !!}/"+ categories_id,
            method:"get",
            dataType:"json",
            success: function(result){
              html = "";
              html += '<option value="">--select--</option>';
              $.each(result, function( index, value ) {

                sel = "";
                @if (old('subcategories',$products->subcategories_id)) 
                  old = "{{ old('subcategories',$products->subcategories_id) }}" 
                  if(old == value.id){
                    sel = "selected";
                  }
                @endif

                html += '<option value="'+value.id+'" '+sel+'>'+value.name+'</option>';
              });
              $("#subcategories").html(html);
            }
          });
        }
      }
    </script>


    

@endsection
