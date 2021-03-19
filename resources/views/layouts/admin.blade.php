<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ sys_config('site_name') }}</title>
<meta name="description" content="Shree Hari e-commerce Site Use Buy Best Products Best Price." />
<link rel="shortcut icon" href="{{ url(sys_config('logo')) }}" />
<meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin_assets/dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/style.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/summernote/summernote-bs4.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('admin_assets/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
   @yield('css')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('admin') }}" class="nav-link">Home</a>
      </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
    
      
      
<!-- 
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li> -->

       <li class="nav-item">
        <a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
      </li>

    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('admin_assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">{{ sys_config('site_name') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('admin_assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ (request()->segment(1) == 'admin' && request()->segment(2) == '') ? 'menu-open' : '' }}">
            <a href="{{ url('admin') }}" class="nav-link {{ (request()->segment(1) == 'admin' && request()->segment(2) == '') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
        
          </li>
          <li class="nav-item has-treeview {{ (request()->segment(2) == 'categories') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->segment(2) == 'categories') ? 'active' : '' }} ">
              <!-- <i class="nav-icon fas fa-box"></i> -->
              <i class="far fa-list-alt"></i>
              <p>
                Categories 
                <i class="right fas fa-angle-left"></i>


              </p>
            </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url(admin().'categories') }}" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == '') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Categories</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ url(admin().'categories/subcategories') }}" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == 'subcategories') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Subcategories</p>
                    </a>
                  </li>

                </ul>
          </li>

          <li class="nav-item has-treeview {{ (request()->segment(2) == 'product') ? 'menu-open' : '' }}">
            <a href="{{ url(admin().'product') }}" class="nav-link {{ (request()->segment(2) == 'product') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Product 
                <i class="right fas fa-angle-left"></i>

              </p>
            </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url(admin().'product') }}" class="nav-link {{ (request()->segment(2) == 'product' && request()->segment(3) == '') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Product</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{ url(admin().'categories/subcategories') }}" class="nav-link {{ (request()->segment(2) == 'categories' && request()->segment(3) == 'subcategories') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Review</p>
                    </a>
                  </li>

                </ul>
          </li>

          <li class="nav-item has-treeview {{ (request()->segment(2) == 'banners') ? 'menu-open' : '' }}">
            <a href="{{ url(admin().'banners') }}" class="nav-link {{ (request()->segment(2) == 'banners') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Banners 
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
           <li class="nav-item has-treeview {{ (request()->segment(3) == 'order') ? 'menu-open' : '' }}">
            <a href="{{ url(admin().'order') }}" class="nav-link {{ (request()->segment(2) == 'order') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-dolly"></i>
              <p>
                Order 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
             
            </a>
             
          </li>
          <li class="nav-item has-treeview {{ (request()->segment(3) == 'vendors') ? 'menu-open' : '' }}">
            <a href="{{ url(admin().'vendors') }}" class="nav-link {{ (request()->segment(2) == 'vendors') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Vendors 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
          <li class="nav-item has-treeview {{ (request()->segment(3) == 'users') ? 'menu-open' : '' }}">
            <a href="{{ url(admin().'users') }}" class="nav-link {{ (request()->segment(2) == 'users') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>

          <li class="nav-item has-treeview {{ (request()->segment(3) == 'setting') ? 'menu-open' : '' }}">
            <a href="{{ url(admin().'setting') }}" class="nav-link {{ (request()->segment(2) == 'setting') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Setting  
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
            <li class="nav-item has-treeview ">
            <a href="{{ route('logout') }}" class="nav-link " onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout 
                <!-- <i class="right fas fa-angle-left"></i> -->

              </p>
            </a>
             
          </li>
<!--           <li class="nav-item has-treeview {{ (request()->segment(1) == 'product') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->segment(1) == 'product') ? 'active' : '' }} ">
              <i class="nav-icon fas fa-box"></i>
              <p>
                categories 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ (request()->segment(2) == 'type') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Type</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ (request()->segment(1) == 'product' && request()->segment(2) == 'list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
         
       
          
       
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
   
            @yield('content')
      </div></div>
 <footer class="main-footer"> {{ sys_config('copyright_text') }}</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('admin_assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('admin_assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<!-- <script src="{{ url('admin_assets/plugins/chart.js/Chart.min.js') }}"></script> -->
<!-- Sparkline -->
<script src="{{ url('admin_assets/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<!-- <script src="{{ url('admin_assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script> -->
<!-- <script src="{{ url('admin_assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> -->
<!-- jQuery Knob Chart -->
<script src="{{ url('admin_assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('admin_assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('admin_assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('admin_assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('admin_assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('admin_assets/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="{{ url('admin_assets/dist/js/pages/dashboard.js') }}"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="{{ url('admin_assets/dist/js/demo.js') }}"></script>
<script src="{{ url('admin_assets/custom.js') }}"></script>

<script src="{{ url('admin_assets/plugins/select2/js/select2.full.min.js') }}"></script>
  @yield('js')

<script type="text/javascript">
    setTimeout(function () {
        $("#msg").fadeOut(3000);
    }, 5000); // <-- time in milliseconds

    // In your Javascript (external .js resource or <script> tag)

</script>

<script>
    // $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Initialize Select2 Elements
        $(".select2bs4").select2({
            theme: "bootstrap4",
        });
</script>
   <div class="modal fade" id="confirm_model" role="dialog"></div>

</body>
</html>
