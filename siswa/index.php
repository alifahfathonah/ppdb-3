<?php
ob_start();
$page = 'Edit Profile';
include('header.php');
include('function.php');
session_start();
if (!isset($_SESSION['siswa'])) {
	header('location:../login.php?alert');
}else{
	$nisn = $_SESSION['username'];
	$data = editprofile($nisn);
	define("BASEPATH", dirname(__FILE__));
	include('_update.php');
}

?>

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Data</h1>
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

		<!-- Default box -->

		<div class="row">
			<div class="col-md-10">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Edit Data Siswa</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<form role="form" action="" method="post">
							<div class="row">
								<div class="col-md-4">
									<?php 
									foreach ($data as $dt) :  ?>
									<div class="form-group">
										<label for="inputnamek">NISN<strong class="text-danger"> *</strong></label>
										<input type="text" disabled="true" class="form-control mb-3" id="nisn" name="nisn"  placeholder="NISN" pattern="[0-9]{10}" value="<?= $dt['nisn']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Nama Lengkap<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nama" name="nama"  placeholder="Nama Lengkap" value="<?= $dt['nama']; ?>" required >
									</div>
									<div class="form-group">
										<label>Tanggal Lahir<strong class="text-danger"> *</strong></label>
										<div class="input-group date" id="reservationdate" data-target-input="nearest">
											<input type="date" id="date" maxlength="17" class="form-control datetimepicker-input" name="tanggal" placeholder="<?= date('d F Y'); ?>" value="<?= $dt['tanggal_lahir']; ?>" required>
											<div class="input-group-append">
												<div class="input-group-text"><i class="fa fa-calendar"></i></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputnamek">Agama<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="agama" required>
											<option selected disabled value="">---</option>
											<option value="Islam" <?php if($dt['agama']=='Islam'){echo 'selected'; }?>>Islam</option>
											<option value="Kristen Khatolik" <?php if($dt['agama']=='Kristen Khatolik'){echo 'selected'; }?>>Kristen Khatolik</option>
											<option value="Kristen Protestan" <?php if($dt['agama']=='Kristen Protestan'){echo 'selected'; }?>>Kristen Protestan</option>
											<option value="Hindu" <?php if($dt['agama']=='Hindu'){echo 'selected'; }?>>Hindu</option>
											<option value="Budha" <?php if($dt['agama']=='Budha'){echo 'selected'; }?>>Budha</option>
											<option value="Konghucu" <?php if($dt['agama']=='Budha'){echo 'selected'; }?>>Konghucu</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">RT<strong class="text-danger"> *</strong></label>
										<input type="number" class="form-control mb-3" id="rt" name="rt"  placeholder="03" value="<?= $dt['rt']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Kecamatan<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="kecamatan" name="kecamatan"  placeholder="Jalancagak" value="<?= $dt['kecamatan']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Riwayat Kesehatan<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="kesehatan" required>
											<option selected disabled value="">---</option>
											<option value="Punya kelainan atau penyakit khusus" <?php if($dt['kesehatan']=='Punya kelainan atau penyakit khusus'){echo 'selected'; }?>>Punya kelainan atau penyakit khusus</option>
											<option value="Punya riwayat sakit sampai sampai harus operasi atau di rawat" <?php if($dt['kesehatan']=='Punya riwayat sakit sampai sampai harus operasi atau di rawat'){echo 'selected'; }?>>Punya riwayat sakit sampai sampai harus operasi atau di rawat</option>
											<option value="Sehat baik fisik maupun mental" <?php if($dt['kesehatan']=='Sehat baik fisik maupun mental'){echo 'selected'; }?>>Sehat baik fisik maupun mental</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Email Aktif<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="email" name="email"  placeholder="markjulian404@gmail.com" value="<?= $dt['email_aktif']; ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Asal Sekolah<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="asalsekolah" name="asalsekolah"  placeholder="MTs Rumnawati" value="<?= $dt['asal_sekolah']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Wilayah Asal Sekolah<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="wilayah" required>
											<option selected disabled value="">---</option>
											<option value="Dalam Kabupaten" <?php if($dt['wilayah_asalsekolah']=='Dalam Kabupaten'){echo 'selected'; }?>>Dalam Kabupaten</option>
											<option value="Luar Kabupaten" <?php if($dt['wilayah_asalsekolah']=='Luar Kabupaten'){echo 'selected'; }?>>Luar Kabupaten</option>
											<option value="Luar Provinsi" <?php if($dt['wilayah_asalsekolah']=='wilayah_asalsekolah'){echo 'selected'; }?>>Luar Provinsi</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Jenis Kelamin<strong class="text-danger"> *</strong></label>
										<select class="form-control" id="jeniskelamin" name="jeniskelamin"  required>
											<option selected disabled value="">---</option>
											<option value="Laki-Laki" <?php if($dt['jenis_kelamin']=='Laki-Laki'){echo 'selected'; }?>>Laki-Laki</option>
											<option value="Perempuan" <?php if($dt['jenis_kelamin']=='Perempuan'){echo 'selected'; }?>>Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Golongan Darah</label>
										<select class="custom-select" name="gdarah">
											<option value="-">---</option>
											<option value="A" <?php if($dt['golongan_darah']=='A'){echo 'selected'; }?>>A</option>
											<option value="B" <?php if($dt['golongan_darah']=='B'){echo 'selected'; }?>>B</option>
											<option value="AB" <?php if($dt['golongan_darah']=='AB'){echo 'selected'; }?>>AB</option>
											<option value="O" <?php if($dt['golongan_darah']=='O'){echo 'selected'; }?>>O</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">RW<strong class="text-danger"> *</strong></label>
										<input type="number" class="form-control mb-3" id="rw" name="rw"  placeholder="04" value="<?= $dt['rw']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Kabupaten<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="kab" name="kab"  placeholder="Subang" value="<?= $dt['kabupaten']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Nilai Rata-Rata Raport<strong class="text-danger"> *</strong></label>
										<input type="number" class="form-control mb-3" id="nrata" name="nrata"  placeholder="7.5" required value="<?= $dt['raport'] ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Alamat<strong class="text-danger"> *</strong></label>
										<textarea rows="4" style="height: 124px;" class="form-control" name="alamat" placeholder="Jl.Raya Sarireja No.4" value="" required><?= $dt['alamat']; ?></textarea>
									</div>
									<div class="form-group">
										<label for="inputnamek">Tempat Lahir<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="tlahir" name="tlahir"  placeholder="Banjarsari" value="<?= $dt['tempat_lahir']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Tinggal Di/Bersama<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="tinggal" required>
											<option selected disabled value="">---</option>
											<option value="Orang Tua Kandung" <?php if($dt['tinggal']=='Orang Tua Kandung'){echo 'selected'; }?>>Orang Tua Kandung</option>
											<option value="Orang Tua Tiri" <?php if($dt['tinggal']=='Orang Tua Tiri'){echo 'selected'; }?>>Orang Tua Tiri</option>
											<option value="Kakek/Nenek" <?php if($dt['tinggal']=='Kakek/Nenek'){echo 'selected'; }?>>Kakek/Nenek</option>
											<option value="Paman/Bibi" <?php if($dt['tinggal']=='Paman/Bibi'){echo 'selected'; }?>>Paman/Bibi</option>
											<option value="Sodara Kandung" <?php if($dt['tinggal']=='Sodara Kandung'){echo 'selected'; }?>>Sodara Kandung</option>
											<option value="Kerabat" <?php if($dt['tinggal']=='Kerabat'){echo 'selected'; }?>>Kerabat</option>
											<option value="Asrama/Pondok Pesantren" <?php if($dt['tinggal']=='Asrama/Pondok Pesantren'){echo 'selected'; }?>>Asrama/Pondok Pesantren</option>
											<option value="Kost-kostan">Kost-kostan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Desa<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="desa" name="desa"  placeholder="Sarireja" value="<?= $dt['desa']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Provinsi<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="prov" name="prov"  placeholder="Jawa Barat" value="<?= $dt['provinsi']; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Bidang Kegiatan<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="bkegiatan" required>
											<option selected disabled value="">---</option>
											<option value="Akademis" <?php if($dt['kegiatan']=='Akademis'){echo 'selected'; }?>>Akademis</option>
											<option value="Kepramukaan" <?php if($dt['kegiatan']=='Kepramukaan'){echo 'selected'; }?>>Kepramukaan</option>
											<option value="Keagamaan" <?php if($dt['kegiatan']=='Keagamaan'){echo 'selected'; }?>>Keagamaan</option>
											<option value="Ke-PMR-an" <?php if($dt['kegiatan']=='Ke-PMR-an'){echo 'selected'; }?>>Ke-PMR-an</option>
											<option value="Paskibra" <?php if($dt['kegiatan']=='Paskibra'){echo 'selected'; }?>>Paskibra</option>
											<option value="Seni Musik" <?php if($dt['kegiatan']=='Seni Musik'){echo 'selected'; }?>>Seni Musik</option>
											<option value="Seni Rupa" <?php if($dt['kegiatan']=='Seni Rupa'){echo 'selected'; }?>>Seni Rupa</option>
											<option value="Beladiri" <?php if($dt['kegiatan']=='Beladiri'){echo 'selected'; }?>>Beladiri</option>
											<option value="Sepak Bola" <?php if($dt['kegiatan']=='Sepak Bola'){echo 'selected'; }?>>Sepak Bola</option>
											<option value="Voli Ball" <?php if($dt['kegiatan']=='Voli Ball'){echo 'selected'; }?>>Voli Ball</option>
											<option value="Bulu Tangkis" <?php if($dt['kegiatan']=='Bulu Tangkis'){echo 'selected'; }?>>Bulu Tangkis</option>
											<option value="Hobi lain yang positif" <?php if($dt['kegiatan']=='Hobi lain yang positif'){echo 'selected'; }?>>Hobi lain yang positif</option>
										</select>
									</div>
								<?php endforeach; ?>
							</div>
						</div>			
						<!-- /.card-body -->
						<div class="card-footer">
							<button type="submit" name="submit" class="btn btn-info">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /.content -->
</div>
<?php include('footer.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#date').datepicker({
			format: "dd-mm-yyyy",

		});

	});
</script>
