  <?php 
  include('config.php');
  $page = 'Home';
  include('header.php');
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

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="card">
            <div class="card-header bg-info">
              Informasi
            </div>
            <div class="card-body">
              Dikarenakan adanya pandemi virus corona kini PPDB SMK Pelita Nusa di laksanakan secara online
              untuk mendukung upaya pemerintah dalam memutus mata rantai CoViD-19. Jadi ayo adek adek yang mau mendaftar klik aja tombol daftar di bawah ini atau bisa juga di sidebar yang sudah kami sediakan.
              Untuk info lebih lanjut bisa hubungi nomor di bawah ini:
            </div>
            <div class="card-footer">
              <a href="daftar.php" class="btn btn-info">Yukk Daftar</a>
              <a href="daftar.php" class="btn btn-warning">Hubungi Kami</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="proses_add_petugas.php" method="post">
          <div class="modal-body">
            <div class="form-group">
              <input type="text" name="username" id="username" class="form-control mb-3" placeholder="Username">
              <input type="text" name="nama" id="nama" class="form-control mb-3" placeholder="Nama Lengkap">
              <input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password">
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <input type="submit" name="Upload" class="btn btn-info" value="Add">
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php
  include('footer.php');
  ?>