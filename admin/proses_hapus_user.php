<?php 
include('function.php');

$id = $_GET['id'];

$hapus = hapus("DELETE FROM user WHERE id='$id'");
if ($hapus) {
	header('location:kelola_user.php?notif=hapus');
}else{
	echo "Gagal Menghapus";
}

 ?>