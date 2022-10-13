<?php

include "connection.php";
	
	$kode_matkul = $_POST['kode_matkul'];
	$nama_matkul = $_POST['nama_matkul'];
	$jam_matkul = $_POST['jam_matkul'];
	$ruang_kelas = $_POST['ruang_kelas'];

	$sql = "UPDATE mata_kuliah SET nama_matkul='$nama_matkul', jam_matkul='$jam_matkul', ruang_kelas='$ruang_kelas' WHERE kode_matkul = '$kode_matkul'";

	if(mysqli_query($conf, $sql)){
		header("location:select.php");
	} else{
		echo "ERROR: Could not able to execute $sql. " .mysqli_error($conf);
	}

?>