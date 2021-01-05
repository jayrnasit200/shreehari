     <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $titel }}</h1>
                    </div>
                   <!--  <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">General Form</li>
                        </ol>
                    </div> -->
                </div>
            </div>
        <div class="container">
  @if(session()->get('msg_s'))
         <div class="alert alert-success alert-dismissible" id="msg">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  {{ session()->get('msg_s') }} 
            </div>
        <!-- </div> -->
        <!-- </section> -->
  @endif

  @if(session()->get('msg_e'))
         <div class="alert alert-danger alert-dismissible" id="msg">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  {{ session()->get('msg_e') }} 
            </div>
  @endif
        </div>
</section>
