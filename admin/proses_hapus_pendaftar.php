<?php 
include('function.php');

$nisn = $_GET['nisn'];

$hapus = hapus("DELETE FROM daftar WHERE nisn='$nisn'");
if ($hapus) {
	header('location:pendaftar.php?notif=hapus');
}else{
	echo "Gagal Menghapus";
}

 ?>