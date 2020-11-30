  <?php 
  $page = 'Pesan';
  include('header.php');
  include('config.php');

  if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $email  = $_POST['email'];
    $pesan  = $_POST['pesan'];
    $tanggal = date("d F Y");

    $query  = mysqli_query($con,"INSERT INTO pesan (nama,email,isi_pesan,tanggal) VALUES('$nama','$email','$pesan','$tanggal')")or die(mysqli_error($con));
    if ($query) {
      echo "<script>
      Swal.fire({
        title: 'Terimakasih!',
        text: 'Pesan anda akan kami tinjau!',
        icon: 'success',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ok'
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $page; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../ppdb">Home</a></li>
              <li class="breadcrumb-item active">Kirim Pesan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header bg-info">
              Kirim Kami Pesan!!
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group">
                  <label class="control-label">Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label class="control-label">Pesan</label>
                  <textarea class="form-control" rows="3" name="pesan"></textarea>
                </div>
                <div class="pull-right">
                 <button type="submit" class="btn btn-info" name="submit">
                  <i class="fas fa-envelope"></i>
                  Kirim Pesan
                </button>
                <button type="reset" class="btn btn-warning">
                  <i class="fas fa-sync-alt"></i>
                  Reset
                </button>
              </div>     
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include('footer.php');
?>