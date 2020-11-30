<?php 
$page = 'Lihat Pendaftar';
include('header.php');
include('function.php');

$data  = query("SELECT * FROM daftar ORDER BY nama ASC");

if (isset($_GET['notif'])) {
	echo "<script>
	Swal.fire({
		title: 'Deleted',
		text: 'Data berhasil dihapus',
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

if (isset($_POST['add'])) {
	$username 	= htmlspecialchars($_POST['username']);
	$password 	= htmlspecialchars($_POST['password']);
	$role		= htmlspecialchars($_POST['role']);
	insert("INSERT INTO user (username,password,role) VALUES('$username','$password','$role')");
	echo "<meta http-equiv='refresh' content='0'>";
}
?>
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
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7">
					<div class="card">
						<div class="card-header bg-info">
							Kelola Data Petugas
						</div>
						<div class="card-body">
							<a class="btn btn-success mb-3" href="export.php">Export To Excel</a>
							<div class="table-responsive">
								<table class="table table-bordered table-hover bg-white">
									<thead style="text-align: center">
										<tr>
											<th>No</th>
											<th>NISN</th>
											<th>Nama</th>
											<th>Asal Sekolah</th>
											<th colspan="2">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1 ?>
										<?php 
										foreach ($data as $dt) : ?>
										<tr>
											<td align="center"><?= $no++ ?></td>
											<td><?= $dt['nisn']; ?></td>
											<td><?= $dt['nama']; ?></td>
											<td><?= $dt['asal_sekolah']; ?></td>
											<td width="35" align="center">
												<a href="page_edit_pendaftar.php?nisn=<?= $dt['nisn']; ?>" class="btn btn-info btn-sm text-white">Edit</a>   
											</td>
											<td width="35" align="center">
												<a class="btn btn-danger btn-sm text-white" href="proses_hapus_pendaftar.php?nisn=<?= $dt['nisn']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus?')">Hapus</a>
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
	</div>
</section>
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
			<form action="" method="post">
				<div class="modal-body">
					<div class="form-group">
						<input type="text" name="username" id="username" class="form-control mb-3" placeholder="Username">
						<input type="password" name="password" id="password" class="form-control mb-3" placeholder="Password">
						<select class="custom-select" name="role">
							<option selected disabled value="">---</option>
							<option value="1">Admin</option>
							<option value="2">Siswa</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<input type="submit" name="add" class="btn btn-info" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
include('footer.php');
?>

