<?php 
$page = 'Manajemen User';
include('header.php');
include('../config.php');
if (isset($_POST['submit'])) {
	$id 		= $_POST['id'];
	$username 	= $_POST['username'];
	$password 	= $_POST['password'];
	$hak 		= $_POST['type'];

	$update = mysqli_query($con,"UPDATE user SET username='$username',password='$password',role='$hak' WHERE id='$id'");
	if ($update) {
		echo "<script>
		Swal.fire({
			title: 'Update',
			text: 'Data berhasil diupdate',
			icon: 'success',
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ok'
		}).then((result) => {
			if (result.value) {
				window.location='kelola_user.php';
			}
		})
		</script>";
	}

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
		</div>
	</section>
	<section class="content">

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-7">
					<!--Card-->
					<div class="card">
						<div class="card-header">
							Edit User
						</div>
						<div class="card-body">
							<?php 
							$id 	= $_GET['id'];
							$query = mysqli_query($con,"SELECT * FROM user WHERE id='$id'");
							while ($data = mysqli_fetch_array($query)) {	 ?>
							<form action="" method="post">
								<div class="form-group">
									<label class="label-control">
										Username
									</label>
									<input type="hidden" name="id" class="form-control" value="<?= $data['id'];  ?>">
									<input type="text" name="username" placeholder="username" class="form-control" value="<?= $data['username']; ?>" required>
								</div>
								<div class="form-group">
									<label class="label-control">
										Password
									</label>
									<input type="password" name="password" placeholder="password" class="form-control" value="<?= $data['password']; ?>" required>
								</div>
								<div class="form-group">
									<label class="label-control">
										Hak Akses
									</label>
									<select class="custom-select" name="type" required>
										<option selected disabled value="">---</option>
										<option value="1">Admin</option>
										<option value="2">Siswa</option>
									</select>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-info" name="submit">Simpan Perubahan</button>
								</div>
							</form>
							<?php } ?>
						</div>
					</div>
					<!--End Card-->

				</div>
			</div>
		</div>



	</section>
</div>


<?php include('footer.php'); ?>