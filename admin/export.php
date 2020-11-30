<?php 
include('../config.php');

$filename = "Data Pendaftar".".xls";

header("Content-Type: application/vnd-ms-excel");
header('Content-Disposition: attachment; filename="'.$filename.'";');

$out=array();
$query = mysqli_query($con,"SELECT * FROM daftar");
while ($data = mysqli_fetch_assoc($query)) $out[]=$data;

$show_column = false;
foreach ($out as $record) {
	if (!$show_column) {
		echo implode("\t", array_keys($record)) . "\n";
		$show_column = true;
	}

	echo implode("\t", array_values($record)) , "\n";
}
exit;
 ?>