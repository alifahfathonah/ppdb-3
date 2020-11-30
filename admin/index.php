<?php

ob_start();
$page = 'Home'; 
date_default_timezone_set("asia/jakarta");
$time = time();
$h = date("G",$time);

if ($h >= 0 && $h <= 11) {
  $ucapan = "Selamat Pagi";
}elseif ($h > 11 && $h <= 14) {
  $ucapan = "Selamat Siang";
}elseif ($h > 14 && $h <= 17) {
  $ucapan = "Selamat Sore";
}else{
  $ucapan = "Selamat Malam";
}
$hasil = $ucapan;
include('header.php');

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
				<div class="col-lg-5">
					<div class="card">
						<div class="card-header bg-info">
							<i class="fas fa-info-circle"></i>
							Informasi
						</div>
						<div class="card-body">
							Hello admin, <?= $ucapan; ?> dan selamat beraktifitas :) <br>
							#Developer
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