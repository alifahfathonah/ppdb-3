<?php
include('../config.php');

function query($query){
	global $con;
    $result = mysqli_query($con,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
    }
    return $rows;
}

function insert($query){
	global $con;
	$insert = mysqli_query($con,$query);
    return $insert;
}

function hapus($query){
    global $con;
    $hapus = mysqli_query($con,$query);
    return $hapus;
}

function update($query){
    global $con;
    $update = mysqli_query($con,$query);
    return $update;
}
?>