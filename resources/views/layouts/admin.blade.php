
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UAS PWTM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="epon.jpeg" alt="AdminLTELogo" height="250" width="250">
  </div>

  <!-- Navbar -->
  <nav style="background-color:rgb(65, 105, 225);" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('about') }}" class="nav-link">About me</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside style="background-color:rgb(65, 105, 225);" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="epon.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Penjualan Online</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex ">
        <div class="image">
          <img src="tunggul.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Tunggul Bayu Kusuma</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
      
            <a class="nav-link">
            </a>

        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a class="nav-link">
              <p>
                Master
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('pelanggan') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Pelanggan
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('produk') }}" class="nav-link">
              <i class="nav-icon fas fa-shopping-bag"></i>
              <p>
                Produk
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <p>
                Transaksi
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('entri-penjualan') }}" class="nav-link">
                      <i class="nav-icon fas fa-store"></i>
                      <p> Penjualan </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('faktur.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-copy"></i>
                      <p> Faktur </p>
                </a>
          </li>
          
          <li class="nav-item">
                <a href="{{ route('kuitansi.index') }}" class="nav-link">
                      <i class="nav-icon fas fa-money-bill"></i>
                      <p>Kuitansi</p>
                </a>
          </li>

          <li class="nav-item">
            <a class="nav-link">
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('laporan-tanggal') }}" class="nav-link">
                      <i class="nav-icon fas fa-flag"></i>
                      <p> Penjualan Per Tanggal </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-flag"></i>
                      <p> Penjualan per Pelanggan </p>
                </a>
          </li>
          
          <li class="nav-item">
                <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-flag"></i>
                      <p>Penjualan per Produk</p>
                </a>
          </li>
          

          </li>
            </ul>
          </li>

            <form id="logout-form" action="#" method="POST" class="d-none">
                @csrf
            </form>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div  style="background-color:rgb(180, 205, 230)" class="content-wrapper">
   @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Tunggul Bayu &copy; 2023 <a class="social-media-icon"  href="https://instagram.com/tnggulbyksma?igshid=MzRlODBiNWFlZA==">Tnggulbyksma<span class="fab fa-instagram"></span></a>.</strong>
    Sistem Penjualan Online.
    <!-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> -->
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
   $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
</body>
</html>
