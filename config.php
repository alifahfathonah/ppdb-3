<?php 
	
	$host 		= 'localhost';//Nama Host default(XAMPP)
	$user 		= 'root';//Username Default(XAMPP)
	$pass 	 	= '';//Password Default (XAMPP)
	$db 		= 'ppdb';//Nama Database

	$con = mysqli_connect($host,$user,$pass,$db);

	if (!$con) {
		header('location:database.php');
	}
 ?>