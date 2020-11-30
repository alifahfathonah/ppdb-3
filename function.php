<?php
include('config.php');

function query($query){
	global $con;
    $result = mysqli_query($con,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    	$rows[] = $row;
    }
    return $rows;
}

function select(){
    global $con;
    $data   = mysqli_query($con,"SELECT * FROM daftar");
    $result = mysqli_fetch_assoc($data);
}

function insert($query){
	global $con;
	$insert = mysqli_query($con,$query);
	return $insert;
}
?>