<?php 
ob_start();
$page 	= 'Daftar';
include('header.php');
include('function.php');
$result 	= mysqli_query($con,"SELECT * FROM daftar");
$data 		= mysqli_fetch_assoc($result);	
session_start();
if (isset($_POST['submit'])) {
	
	$_SESSION['pos']= $_POST;
	if ($_POST['nama-wali'] == '') {
		$nama_wali 		= 'Tidak Ada';
		$nik_wali 		= 'Tidak Ada';
		$p_wali 		= 'Tidak Ada';
	}else{
		$nama_wali 		= $_SESSION['pos']['nama-wali'];
		$nik_wali 		= $_SESSION['pos']['nik-wali'];
		$p_wali 		= $_POST['p-wali'];
	}
	$jeniskelamin 	= $_POST['jeniskelamin'];
	$gdarah 		= $_POST['gdarah'];
	$agama 			= $_POST['agama'];
	$tinggal 		= $_POST['tinggal'];
	$bkegiatan 		= $_POST['bkegiatan'];
	$kejuruan 		= $_POST['kejuruan'];
	$pondok 		= $_POST['pondok'];
	$p_ayah 		= $_POST['p-ayah'];
	$p_ibu 			= $_POST['p-ibu'];
	$nisns 			= $_SESSION['pos']['nisn'];
	$namas 			= $_SESSION['pos']['nama'];
	$tanggals 		= $_SESSION['pos']['tanggal'];
	$rts 			= $_SESSION['pos']['rt'];
	$kecamatans 	= $_SESSION['pos']['kecamatan'];
	$emails 		= $_SESSION['pos']['email'];
	$asalsekolahs 	= $_SESSION['pos']['asalsekolah'];
	$rws 			= $_SESSION['pos']['rw'];
	$kabs 			= $_SESSION['pos']['kab'];
	$nratas 		= $_SESSION['pos']['nrata'];
	$tlahirs 		= $_SESSION['pos']['tlahir'];
	$desas 			= $_SESSION['pos']['desa'];
	$jk 			= $_SESSION['pos']['jk'];
	$provs 			= $_SESSION['pos']['prov'];
	$nama_ayah 		= $_SESSION['pos']['nama-ayah'];
	$nik_ayah 		= $_SESSION['pos']['nik-ayah'];
	$nama_ibu 		= $_SESSION['pos']['nama-ibu'];
	$nik_ibu 		= $_SESSION['pos']['nik-ibu'];
	$penghasilan 	= $_SESSION['pos']['penghasilan'];
	$alamat_ortu	= $_SESSION['pos']['alamat'];


	if ($nisns == $data['nisn']) {
		echo "<script>
		alert('Nisn Sudah Terdaftar');
		</script>";
	}else{
		if ($nisns != $data['nisn']) {
			insert("INSERT INTO daftar (nisn,nama,asal_sekolah,kampung,tanggal_lahir,jenis_kelamin,tempat_lahir,agama,golongan_darah,tinggal,rt,rw,desa,kecamatan,kabupaten,provinsi,raport,kegiatan,email_aktif,kejuruan,pondok,nama_ayah,nik_ayah,nama_ibu,nik_ibu,nama_wali,nik_wali,pend_ayah,pend_ibu,pend_wali,penghasilan,alamat_ortu)"."VALUES('$nisns','$namas','$asalsekolahs','$jk','$tanggals','$jeniskelamin','$tlahirs','$agama','$gdarah','$tinggal','$rts','$rws','$desas','$kecamatans','$kabs','$provs','$nratas','$bkegiatan','$emails','$kejuruan','$pondok','$nama_ayah','$nik_ayah','$nama_ibu','$nik_ibu','$nama_wali','$nik_wali','$p_ayah','$p_ibu','$p_wali','$penghasilan','$alamat_ortu')")or die(mysqli_error($con));

			insert("INSERT INTO user (username,password,role)"."VALUES('$nisns','$nisns','2')")or die(mysqli_error($con));
			echo "<script>
        Swal.fire({
            title: 'Sukses',
            text: 'Berhasil mendaftar, Silakan login!',
            icon: 'success',
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ok'
        }).then((result) => {
            if (result.value) {
                window.location.replace('login.php');
            }
        })
        </script>";
			include_once('_prosesdaftar.php');
		}
	}
}else{
	include_once('_prosesdaftar.php');
}
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Halaman Pendaftaran</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="../ppdb">Home</a></li>
						<li class="breadcrumb-item active">Daftar</li>
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
						<h3 class="card-title">Data Siswa</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<form role="form" action="" method="post">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">NISN<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nisn" name="nisn"  placeholder="NISN" pattern="[0-9]{10}" value="<?= $nisns; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Nama Lengkap<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nama" name="nama"  placeholder="Nama Lengkap" value="<?= $namas; ?>" required >
									</div>
									<div class="form-group">
										<label>Tanggal Lahir<strong class="text-danger"> *</strong></label>
										<div class="input-group date" id="reservationdate" data-target-input="nearest">
											<input type="date" id="date" maxlength="17" class="form-control datetimepicker-input" name="tanggal" placeholder="<?= date('d F Y'); ?>" value="<?= $tanggals; ?>" required>
											<div class="input-group-append">
												<div class="input-group-text"><i class="fa fa-calendar"></i></div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputnamek">Agama<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="agama" required>
											<option selected disabled value="" class="bg-primary">---</option>
											<option value="Islam" class="bg-primary">Islam</option>
											<option value="Kristen Khatolik" class="bg-primary">Kristen Khatolik</option>
											<option value="Kristen Protestan" class="bg-primary">Kristen Protestan</option>
											<option value="Hindu" class="bg-primary">Hindu</option>
											<option value="Budha" class="bg-primary">Budha</option>
											<option value="Konghucu" class="bg-primary">Konghucu</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">RT<strong class="text-danger"> *</strong></label>
										<input type="number" class="form-control mb-3" id="rt" name="rt"  placeholder="03" value="<?= $rts; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Kecamatan<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="kecamatan" name="kecamatan"  placeholder="Jalancagak" value="<?= $kecamatans; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Email Aktif<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="email" name="email"  placeholder="markjulian404@gmail.com" value="<?= $emails; ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Asal Sekolah<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="asalsekolah" name="asalsekolah"  placeholder="MTs Rumnawati" value="<?= $asalsekolahs; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Jenis Kelamin<strong class="text-danger"> *</strong></label>
										<select class="form-control" id="jeniskelamin" name="jeniskelamin"  required>
											<option selected disabled value="">---</option>
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Golongan Darah</label>
										<select class="custom-select" name="gdarah">
											<option value="-">---</option>
											<option value="A">A</option>
											<option value="B">B</option>
											<option value="AB">AB</option>
											<option value="O">O</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">RW<strong class="text-danger"> *</strong></label>
										<input type="number" class="form-control mb-3" id="rw" name="rw"  placeholder="04" value="<?= $rws; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Kabupaten<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="kab" name="kab"  placeholder="Subang" value="<?= $kabs; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Nilai Rata-Rata Raport<strong class="text-danger"> *</strong></label>
										<input type="number" class="form-control mb-3" id="nrata" name="nrata"  placeholder="7.5" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Kejuruan<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="kejuruan" required>
											<option selected disabled value="">---</option>
											<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
											<option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Jalan/Kampung<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="jk" name="jk"  placeholder="Mekarsari" value="<?= $jk; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Tempat Lahir<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="tlahir" name="tlahir"  placeholder="Subang" value="<?= $tlahirs; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Tinggal Di/Bersama<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="tinggal" required>
											<option selected disabled value="">---</option>
											<option value="Orang Tua Kandung">Orang Tua Kandung</option>
											<option value="Orang Tua Tiri">Orang Tua Tiri</option>
											<option value="Kakek/Nenek">Kakek/Nenek</option>
											<option value="Paman/Bibi">Paman/Bibi</option>
											<option value="Sodara Kandung">Sodara Kandung</option>
											<option value="Kerabat">Kerabat</option>
											<option value="Asrama/Pondok Pesantren">Asrama/Pondok Pesantren</option>
											<option value="Kost-kostan">Kost-kostan</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Desa<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="desa" name="desa"  placeholder="Sarireja" value="<?= $desas; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Provinsi<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="prov" name="prov"  placeholder="Jawa Barat" value="<?= $provs; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Senang/Hobi Berkegiatan<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="bkegiatan" required>
											<option selected disabled value="">---</option>
											<option value="Akademis">Akademis</option>
											<option value="Kepramukaan">Kepramukaan</option>
											<option value="Keagamaan">Keagamaan</option>
											<option value="Ke-PMR-an">Ke-PMR-an</option>
											<option value="Paskibra">Paskibra</option>
											<option value="Seni Musik">Seni Musik</option>
											<option value="Seni Rupa">Seni Rupa</option>
											<option value="Beladiri">Beladiri</option>
											<option value="Sepak Bola">Sepak Bola</option>
											<option value="Voli Ball">Voli Ball</option>
											<option value="Bulu Tangkis">Bulu Tangkis</option>
											<option value="Hobi lain yang positif">Hobi lain yang positif</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Siap Mengikuti Program Pondok?<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="pondok" required>
											<option selected disabled value="">---</option>
											<option value="Siap">Siap</option>
											<option value="Tidak Siap">Tidak Siap</option>
											<option value="Pikir Pikir Dulu">Pikir Pikir Dulu</option>
										</select>
									</div>
								</div>
							</div>			
							<!-- /.card-body -->
					</div>
				</div>

				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Data Orang Tua/Wali</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Nama Ayah<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nama-ayah" name="nama-ayah"  placeholder="Nama Lengkap" value="<?= $nama_ayah; ?>" required >
									</div>
									<div class="form-group">
										<label for="inputnamek">NIK Ayah<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nik-ayah" name="nik-ayah"  placeholder="NIK Ayah" value="<?= $nik_ayah; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Nama Ibu<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nama-ibu" name="nama-ibu"  placeholder="Nama Lengkap" value="<?= $nama_ibu; ?>" required >
									</div>
									<div class="form-group">
										<label for="inputnamek">NIK Ibu<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="nik-ibu" name="nik-ibu"  placeholder="NIK Ibu" value="<?= $nik_ibu; ?>" required>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Nama Wali <i>(Jika Ada)</i></label>
										<input type="text" class="form-control mb-3" id="nama-wali" name="nama-wali"  placeholder="Nama Lengkap" value="<?= $nama_wali; ?>">
									</div>
									<div class="form-group">
										<label for="inputnamek">NIK Wali <i>(Jika Ada)</i></label>
										<input type="text" class="form-control mb-3" id="nik-wali" name="nik-wali"  placeholder="NIK Wali" value="<?= $nik_wali; ?>">
									</div>
									<div class="form-group">
										<label for="inputnamek">Pendidikan Ayah<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="p-ayah" required>
											<option selected disabled value="">---</option>
											<option value="Tidak Ada">Tidak Ada</option>
											<option value="SD">SD</option>
											<option value="SLTP">SLTP</option>
											<option value="SLTA">SLTA</option>
											<option value="S-1">S-1</option>
											<option value="S-2">S-2</option>
											<option value="S-3">S-3</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Pendidikan Ibu<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="p-ibu" required>
											<option selected disabled value="">---</option>
											<option value="Tidak Ada">Tidak Ada</option>
											<option value="SD">SD</option>
											<option value="SLTP">SLTP</option>
											<option value="SLTA">SLTA</option>
											<option value="S-1">S-1</option>
											<option value="S-2">S-2</option>
											<option value="S-3">S-3</option>
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="inputnamek">Pendidikan Wali<strong class="text-danger"> *</strong></label>
										<select class="custom-select" name="p-wali">
											<option selected disabled value="">---</option>
											<option value="Tidak Ada">Tidak Ada</option>
											<option value="SD">SD</option>
											<option value="SLTP">SLTP</option>
											<option value="SLTA">SLTA</option>
											<option value="S-1">S-1</option>
											<option value="S-2">S-2</option>
											<option value="S-3">S-3</option>
										</select>
									</div>
									<div class="form-group">
										<label for="inputnamek">Penghasilan Orang Tua<strong class="text-danger"> *</strong></label>
										<input type="text" class="form-control mb-3" id="penghasilan" name="penghasilan"  placeholder="Penghasilan Ortu" value="<?= $penghasilan; ?>" required>
									</div>
									<div class="form-group">
										<label for="inputnamek">Alamat Orang Tua<strong class="text-danger"> *</strong></label>
										<textarea rows="4" style="height: 124px;" class="form-control" name="alamat" placeholder="Jl.Raya Sarireja No.4" value="<?= $alamat_ortu; ?>" required></textarea>
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
			<!-- /.card-body -->
			<!-- /.card -->
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

