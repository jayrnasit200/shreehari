@extends('layouts.vendor')
 @section('css')
<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
@endsection
 @section('content')
  @include('title.heading')

<section class="content">
    <div >
      <form method="post" enctype="multipart/form-data">@csrf
        <div class=" print-error-msg" id="msg" style="display:none">
                   <ul style="top: 70px; position: absolute;right: 0;z-index: 1;"></ul>
               </div>
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
                                    <input type="text" name="name" class="form-control @error('color') is-invalid @enderror" placeholder="Enter Name" value="{{ old('name') }}">
                                     @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>categories</label>
                                    <select name="categories" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        <option >Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                      </select>
                                     @error('categories')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                 <div class="form-group">
                                    <label>subcategories</label>
                                    <select name="subcategories" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                      </select>
                                     @error('subcategories')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                <div class="form-group">
                                    <label>type</label>
                                    <select name="type" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                      </select>
                                     @error('type')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                 <div class="form-group">
                                    <label>sub_types</label>
                                    <select name="sub_types" class="form-control select2" style="width: 100%;" aria-hidden="true">
                                        <option value=""> --select--</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                      </select>
                                     @error('sub_types')<span class="text-danger">{{ $message }}</span>@enderror
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
                                    <label>Short Cicaripsan</label>
                                    <input type="text" name="short_dicaripsan" class="form-control @error('short_dicaripsan') is-invalid @enderror" placeholder="Enter Name" value="{{ old('short_dicaripsan') }}">
                                     @error('short_dicaripsan')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                               <div class="form-group">
                                    <label>Dicaripsan</label>
                                    <textarea name="dicaripsan" placeholder="Enter Dicaripsan" class="form-control">{{ old('dicaripsan') }}</textarea>
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
                                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter price" value="{{ old('price') }}">
                                     @error('price')<span class="text-danger">{{ $message }}</span>@enderror
                                </div>

                                 <div class="form-group">
                                    <label>discount</label>
                                    <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" placeholder="Enter discount" value="{{ old('price') }}">
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
                                    <img class="profile-img img-fluid float-right" id="preview" height="150" width="150" />
                                    <div>
                                    <input type="File" name="image" id="file" onchange="previewImage();" class="" />
                                     @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                                   </div>
                                </div>

                                
                                  <div class="form-group">
                                    <label>More Images</label>
                                   <div>
                                    <input type="File"  id="images" name="all_img[]" onchange="preview_images();" multiple class="" />
                                     @error('all_img')<span class="text-danger">{{ $message }}</span>@enderror
                                   </div>
                                    <div class="row" id="image_preview"></div>
                                </div>
                             
                            </div>
                        </div>
                     </div> 
                  </div>
                </div>
          
                  
                    </div>
                    <div class="card-footer con">
                        <a href="{{ url('product/type/list') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary btn-submit">Submit</button>
                    </div>
                

                <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
            </div>
        </div>
      </form>
    </div>
</section>

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


<script type="text/javascript">

    $(document).ready(function() {
        $(".btn-submit").click(function(e){
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var name = $("input[name='name']").val();
            var categories = $("select[name='categories']").val();
            var subcategories = $("select[name='subcategories']").val();
            var type = $("select[name='type']").val();
            var sub_types = $("select[name='sub_types']").val();
            var short_dicaripsan = $("input[name='short_dicaripsan']").val();
            var dicaripsan = $("textarea[name='dicaripsan']").val();
            var price = $("input[name='price']").val();
            var image = $("input[name='image']").val();

            $.ajax({
                url: "{{ url('/product/add') }}",
                type:'POST',
                data: {
                  _token:_token,
                   name:name,
                    categories:categories,
                     subcategories:subcategories,
                      type:type,
                      sub_types:sub_types,
                      short_dicaripsan:short_dicaripsan,
                      dicaripsan:dicaripsan,
                      price:price,
                      image:image
                    },
                success: function(data) {
                    if($.isEmptyObject(data.error)){
                        // alert(data.success);
                      // console.log(data);

                         printsuccessMsg(data.success);
                    }else{
                        printErrorMsg(data.error);
                            console.log(data);

                    }
                }
            });

        }); 

         function printsuccessMsg (msg) {

            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $(".print-error-msg").find("ul").append('<li class="alert alert-success">'+msg+'</li>');
            // $.each( msg, function( key, value ) {
            //     $(".print-error-msg").find("ul").append('<li class="alert alert-success">'+value+'</li>');
            // });
            $(document).ready(function () {
            // setTimeout(function () {
            //   // alert('Reloading Page');
            //   location.reload(true);
            // }, 1000);
          });
        }

        function printErrorMsg (msg) {
          console.log(msg);
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li class="alert alert-danger">'+value+'</li>');
            });
        }
    });



</script>

@endsection
