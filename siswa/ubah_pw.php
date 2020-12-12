<?php 
ob_start();
$page = 'pw';
include('header.php');
include('function.php');
$nisn 	= $_SESSION['username'];
ubahpw($nisn);
$query = mysqli_query($con,"SELECT * FROM user WHERE username='$nisn'");
$lg = mysqli_fetch_assoc($query);


if (isset($_POST['submit'])) {
	$pw 	= $_POST['pwlama'];
	$pwb 	= $_POST['pwbaru'];
	$pwk 	= $_POST['pwkonfir'];
	if ($lg['password'] == $pw) {
        if ($pwb == $pwk) {
            password($pwb,$nisn);
            echo "<script>
            Swal.fire({
                title: 'Sukses',
                text: 'Password Berhasil Di Ubah',
                icon: 'success',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                    window.location.replace('ubah_pw.php');
                }
            })
            </script>";

        }else{
            echo "<script>
            Swal.fire({
                title: 'Oppss..',
                text: 'Password Tidak Sama',
                icon: 'error',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.value) {
                    window.location.replace('ubah_pw.php');
                }
            })
            </script>";
        }
    }else{
        echo "<script>
        Swal.fire({
            title: 'Oppss..',
            text: 'Password Lama Salah',
            icon: 'error',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.value) {
                window.location.replace('ubah_pw.php');
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
					<h1>Ubah Password</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">

					</ol>
				</div>
			</div>
		</div>	</section>

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-5">

						<div class="card">
							<div class="card-header font-weight-bold text-gray">
								<i class="fas fw fa-key"></i>
								For Secure Your Account
							</div>
							<div class="card-body">
								<form action="" method="post">
									<div class="form-group">
										<label class="label-control">NISN</label>
										<input type="text" name="nisn" class="form-control" value="<?= $nisn; ?>" disabled>
									</div>
									<div class="form-group">
										<label class="label-control">PASSWORD LAMA</label>
										<input type="password" name="pwlama" class="form-control">
									</div>
									<div class="form-group">
										<label class="label-control">PASSWORD BARU</label>
										<input type="password" name="pwbaru" class="form-control">
									</div>
									<div class="form-group">
										<label class="label-control">KONFIRMASI PASSWORD</label>
										<input type="password" name="pwkonfir" class="form-control">
									</div>
									<div class="form-group">
										<button class="btn btn-info" name="submit">Simpan</button>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>

			</div>
		</section>
	</div>
	<?php 
	include('footer.php'); ?>