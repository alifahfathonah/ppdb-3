<?php
include('../config.php');

function ubahpw($nisn){
	global $con;
    $result = mysqli_query($con,"SELECT * FROM user WHERE username='$nisn'");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
    	$rows[] = $row;
    }
    return $rows;
}

function editprofile($nisn){
    global $con;
    $result = mysqli_query($con,"SELECT * FROM daftar WHERE nisn='$nisn'");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function password($pwb,$nisn){
    global $con;
    $update = mysqli_query($con,"UPDATE user SET password = '$pwb' WHERE username='$nisn'")or die(mysqli_error($con));
    return $update;
}

?>