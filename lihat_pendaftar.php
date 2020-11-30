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
						<li class="breadcrumb-item"><a href="../ppdb">Home</a></li>
						<li class="breadcrumb-item active">Lihat Pendaftar</li>
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
							<div class="table-responsive">
								<table class="table table-bordered table-hover bg-white">
									<thead style="text-align: center">
										<tr>
											<th>No</th>
											<th>Nama</th>
											<th>Jenis Kelamin</th>
											<th>Asal Sekolah</th>
										</tr>
									</thead>
									<tbody>
										<?php $no = 1 ?>
										<?php 
										foreach ($data as $dt) : ?>
										<tr>
											<td align="center"><?= $no++ ?></td>
											<td><?= $dt['nama']; ?></td>
											<td><?= $dt['jenis_kelamin']; ?></td>
											<td><?= $dt['asal_sekolah']; ?></td>
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
<?php 
include('footer.php');
?>

