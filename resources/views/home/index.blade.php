<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('lte')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('lte')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('lte')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="/logout" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://w1.pngwing.com/pngs/823/446/png-transparent-java-logo-cirebon-bekasi-regency-kpu-kabupaten-cirebon-cirebon-regency-symbol-education-sri-baduga-maharaja-west-java.png" class="nav-logo" alt="">
        </div>
        <div class="info">
          <a href="#" class="d-block">Desa SindangJawa</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-university"></i>
              <p>
                Desa
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Visi Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sejarah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kepala desa</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="fas fa-scroll"></i>
              <p>
                Gambaran Umum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kondisi Geografis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Demografis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kondisi Ekonomi</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu">
            <a href="#" class="nav-link">
              <i class="fas fa-newspaper"></i>
              <p>
                Berita
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Berita Desa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pengumuman</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item menu">
                <a href="#" class="nav-link">
                  <i class="fas fa-table"></i>
                  <p>
                Lembaga
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PKK</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Karang Taruna</p>
                </a>
              </li>
        </ul>
        </li>
        <li class="nav-item menu">
          <a href="/pemdes" class="nav-link">
            <i class="fas fa-building"></i>
            <p>
          Pemerintahan Desa
    
        </p>
          </a>
        </li>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <!-- wlcme text -->
    <div class="text-center">
      <div class="card-body">
        <div class="classic-view">
            <article class="post">
                <h1>Sejarah Desa </h1>
                <div class="text-left">
                  <p>
                    Berawal sekitar abad 16 masehi, seorang Resi yang bernama Pandunata mempunyai seorang putri bernama Nyi Mas Indang Larasakti, mendirikan sebuah pedukuhan disebelah utara kaki gunung Ciremai yang diberi nama Padukuhan Banjarmelati. Kata Banjar yang berarti pekarangan dan Melati berarti bunga putih yang harum baunya. Jadi Banjarmelati artinya sebuah pekarangan atau pemukiman yang bersih dan menyenangkan. Padukuhan Banjarmelati berada dibawah kekuasaan kerajaan galuh (kawali) yang berafiliasi dengan pakuan pajajaran.
                    Resi Pandunata kemudian menyerahkan tampuk kepemimpinan kepada putrinya yang bernama Nyi Mas Indang Larasakti, pada masa kekuasaan Nyi Mas Indang Larasakti, padukuhan Banjarmelati kedatangan utusan dari Kesultanan Cirebon yang dipimpin oleh Ki Sura yang membawa perintah untuk menyebarkan agama islam. Hal ini sudah diprediksi oleh Resi Pandunata dan menyarankan kepada Nyi Mas Indang Larasakti agar nantinya dapat menerima dengan baik atas kedatangan utusan dari Kesultanan Cirebon.
                    Dengan kedatangan Ki Sura dan pasukannya dipadukuhan Banjarmelati membawa perubahan yang amat pesat, sehingga pedukuhan atau perkampungan Banjarmelati menjadi ramai dan menyenangkan dengan suasana yang terang benderang. Karena itulah nama Banjarmelati diganti menjadi Banjarpatom, yang berarti pekarangan atau pemukiman yang bercahaya.
                    Pada tahun 1629 M, pasukan tentara Sultan Agung yang dipimpin oleh Ki Padmanegara dan Suryalaga, yang mengalami kegagalan dalam melancaran serangannya terhadap VOC dalam perjalan pulangnya ke Mataram mereka singgah untuk beristirahat di Banjarpatoman, karena suasana perkampungan Banjarpatoman yang ramai dan menyenangkan sehingga mereka nyaman dan kerasan tinggal di Banjarpatoman dan sebagian besar dari mereka memutuskan untuk tetap tinggal di Banjarpatoman. Hal ini kemudian diketahui oleh Sultan Cirebon dan menaruh perhatian besar terhadap pasukan dari Jawa ini karena menganggap mereka adalah pejuang.
                    Kehadiran tentara Sultan Agung di Banjarpatoman merupakan peristiwa bersejarah yang perlu dikenang. Karena itulah Sultan Cirebon tempat ini diberi nama Sindangjawa. Kata Sindang yang berati singgah dan Jawa berasal dari Orang Jawa (Mataram). Jadi Sindangjawa berarti Singgahnya Orang-orang Jawa. Sejak itulah nama Banjarpatoman dilupakan dan orang sering menyebut dengan nama Sindangjawa.
                    Dalam upaya memajukan perekonomian dan pemerataan pembangunan, pada tanggal 03 Maret 1984 Desa Sindangjawa dimekarkan menjadi 2 (dua) desa yaitu desa induk bernama Sindangjawa dan desa pemekaran yang berada di sebelah Barat diberi nama Sindangmekar.
                  </p>
                  <div class="text-left">
                      <div class="card-body">
                        <div class="classic-view">
                        <h2 class="h1 mb-4 text-center" >Visi</h2>
                        <p>
                            Menghasilkan lulusan yang unggul dalam IMTAQ dan IPTEK, serta mampu bersaing pada tingkat nasional dan global.
                        </p>
                        <h2 class="h1 mb-4 text-center">Misi</h2>
                        <p>
                            1. Melaksanakan kurikulum melalui pembelajaran dan penilaian berbasis kompetensi, berbasis wirausaha, akhlakul kharimah dan berwawasan.<br><br> 2. Menumbuhkan semangat kreatifitas, unggul secara optimal dan
                            kepada seluruh siswa dan warga sekolah.<br><br> 3. Mendorong dan membantu setiap siswa untuk mengenali potensi dirinya, sehingga dapat berkembang secara optimal.<br><br> 4. Menumbuhkan penghayatan terhadap agama
                            yang dianut dan juga etika moral sehingga menjadi sumber kearifan dalam bertindak.<br><br> 5. Menerapkan manajemen partisipasi dengan melibatkan seluruh warga sekolah dan meningkatkan kualitas sumber daya manusia
                            melalui sertifikasi guru serta diklat untuk staf dan karyawan.
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
          </article>
        </div>
      </div>
    </div>
  </div>
    
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('lte')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('lte')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('lte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('lte')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('lte')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('lte')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('lte')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('lte')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('lte')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('lte')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('lte')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('lte')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('lte')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('lte')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('lte')}}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('lte')}}/dist/js/pages/dashboard.js"></script>
</body>
</html>
