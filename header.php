<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pendaftaran Online</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <script src="assets/js/sweetalert2.all.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
       <img src="assets/img/pendidikan.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" >
       <span class="brand-text font-weight-light">PPDB ONLINE</span>
     </a>
     <!-- Sidebar -->
     <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="../ppdb" <?php if ($page == 'Home') { echo "class='nav-link active'"; }else{ echo "class='nav-link'"; } ?>>
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="daftar.php" <?php if ($page == 'Daftar') { echo "class='nav-link active'"; }else{ echo "class='nav-link'"; } ?>>
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Daftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="lihat_pendaftar.php" <?php if ($page == 'Lihat Pendaftar') { echo "class='nav-link active'"; }else{ echo "class='nav-link'"; } ?>>
              <i class="nav-icon fas fa-user"></i>
              <p>
                Lihat Pendaftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.php" <?php if ($page == 'Login') { echo "class='nav-link active'"; }else{ echo "class='nav-link'"; } ?>>
              <i class="nav-icon fas fa-key"></i>
              <p>
               Login
             </p>
           </a>
         </li>
         <li class="nav-item">
          <a href="pesan.php" <?php if ($page == 'Pesan') { echo "class='nav-link active'"; }else{ echo "class='nav-link'"; } ?>>
            <i class="nav-icon fas fa-envelope"></i>
            <p>
              Kirim Pesan
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
