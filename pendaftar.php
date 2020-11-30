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
							Lihat Pendaftar
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered table-hover bg-white">
									<thead style="text-align: center">
										<tr>
											<th>No</th>
											<th>NISN</th>
											<th>Nama</th>
											<th>Asal Sekolah</th>
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

