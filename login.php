  <?php
  ob_start(); 
  $page = 'Login';
  include('config.php');
  include('header.php');

  session_start();
  if (isset($_GET['alert'])) {
    echo "<script>
    Swal.fire({
      title: 'Oppss..',
      text: 'Harap Login Terlebih Dahulu',
      icon: 'error',
      width: 600,
      padding: '3em',
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Ok',
      backdrop: `
      blue
      left top
      no-repeat
      `
    }).then((result) => {
      if (result.value) {
        window.location.replace('login.php');

      }
    })
    </script>";
    exit;
  }
  if (isset($_SESSION['siswa'])) {
    header('location:siswa');
  }elseif (isset($_SESSION['admin'])) {
    header('location:admin');
  }
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query  = mysqli_query($con,"SELECT * FROM user WHERE username='$username' and password='$password'");
    $data   = mysqli_fetch_array($query);
    $cek    = mysqli_num_rows($query);
    
    if ($cek == 1) {
      if ($data['role'] == 1) {
        $_SESSION['admin'] = true;
        echo "<script>
        Swal.fire({
          title: 'Welcome',
          text: 'Anda berhasil login',
          icon: 'success',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ok'
        }).then((result) => {
          if (result.value) {
            window.location.replace('admin');
          }
        })
        </script>";
      }else{
        $_SESSION['siswa'] = true;
        $_SESSION['username'] = $username;
        echo "<script>
        Swal.fire({
          title: 'Welcome',
          text: 'Anda berhasil login',
          icon: 'success',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ok'
        }).then((result) => {
          if (result.value) {
            window.location.replace('siswa');
          }
        })
        </script>";
      }
    }else{
     echo "<script>
     Swal.fire({
      title: 'Oopss...',
      text: 'Username atau password salah',
      icon: 'error',
      confirmButtonColor: 'red',
      confirmButtonText: 'Coba Lagi'
    }).then((result) => {
      if (result.value) {
        
      }
    })
    </script>";
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row pt-3">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-gray font-weight-bold">
              <i class="fas fa-info-circle text-gray"></i>
              INFORMASI
            </div>
            <div class="card-body">
              <ol type="1">
                <li>Pastikan Anda sudah terdaftar sebagai calon siswa baru.</li>
                <li>Login menggunakan NISN sebagai username dan password awal.</li>
                <li>Jangan lupa untuk mengubah password Anda jika berhasil login.</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header text-gray font-weight-bold">
              <i class="fas fa-user text-gray"></i>
              MASUK
            </div>
            <div class="card-body">
              <form class="form-horizontal" role="form" action="" method="post">
                <div class="form-group">
                  <label class="control-label">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label class="control-label">Password</label>
                  <input type="password" class="form-control" minlength="5" maxlength="16" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                 <button type="submit" name="submit" class="btn btn-info">
                  <i class="fas fa-sign-in-alt"></i>
                  Masuk
                </button>
                <button type="reset" class="btn btn-warning">
                  <i class="fas fa-sync-alt"></i>
                  Ulangi
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('footer.php') ?>