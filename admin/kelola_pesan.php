  <?php 
  $page = 'Pesan';
  include('header.php');
  include('function.php');

  $pesan = query("SELECT * FROM pesan ORDER BY id ASC");
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
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header bg-info">
              Kelola Pesan
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover bg-white">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Isi Pesan</th>
                      <th>Tanggal Mengirim</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1 ?>
                    <?php 
                    foreach ($pesan as $data) : ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $data['nama']; ?></td>
                      <td><?= $data['email']; ?></td>
                      <td><?= $data['isi_pesan']; ?></td>
                      <td><?= $data['tanggal']; ?></td>
                      <td>
                        <a class="btn btn-danger btn-sm text-white">Hapus</a>   
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              
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