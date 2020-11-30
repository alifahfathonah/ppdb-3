<?php 
defined('BASEPATH') or die("No access direct allowed");
if (isset($_POST['submit'])) {
	$wilayah 		= $_POST['wilayah'];
	$jeniskelamin 	= $_POST['jeniskelamin'];
	$gdarah 		= $_POST['gdarah'];
	$agama 			= $_POST['agama'];
	$tinggal 		= $_POST['tinggal'];
	$kesehatan 		= $_POST['kesehatan'];
	$bkegiatan 		= $_POST['bkegiatan'];
	$namas 			= $_POST['nama'];
	$tanggals 		= $_POST['tanggal'];
	$rts 			= $_POST['rt'];
	$kecamatans 	= $_POST['kecamatan'];
	$emails 		= $_POST['email'];
	$asalsekolahs 	= $_POST['asalsekolah'];
	$rws 			= $_POST['rw'];
	$kabs 			= $_POST['kab'];
	$nratas 		= $_POST['nrata'];
	$tlahirs 		= $_POST['tlahir'];
	$desas 			= $_POST['desa'];
	$alamats 		= $_POST['alamat'];
	$provs 			= $_POST['prov'];

	$edit  = update("UPDATE daftar SET nama = '$namas', asal_sekolah = '$asalsekolahs', wilayah_asalsekolah = '$wilayah', alamat = '$alamats', tanggal_lahir = '$tanggals', jenis_kelamin = '$jeniskelamin', tempat_lahir = '$tlahirs', agama = '$agama', golongan_darah = '$gdarah', tinggal = '$tinggal', rt = '$rts', rw = '$rws', desa = '$desas', kecamatan = '$kecamatans', kabupaten = '$kabs', provinsi = '$provs', kesehatan = '$kesehatan', raport = '$nratas', kegiatan = '$bkegiatan', email_aktif = '$emails' WHERE nisn='$nisn'")or die(mysqli_error($con));
	if ($edit) {
		echo "<script>
		Swal.fire({
			title: 'Congratulation',
			text: 'Data berhasil diubah',
			icon: 'success',
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Ok'
		}).then((result) => {
			if (result.value) {
				window.location.replace('../siswa');
			}
		})
		</script>";
	}
}else{

}
 ?>
