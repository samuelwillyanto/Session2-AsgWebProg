<?php
	include "connection.php";
	
	$kode_matkul = $_REQUEST['kode_matkul'];
	$nama_matkul = $_REQUEST['nama_matkul'];
	$jam_matkul = $_REQUEST['jam_matkul'];
	$ruang_kelas = $_REQUEST['ruang_kelas'];

	$sql = "INSERT INTO mata_kuliah VALUES('$kode_matkul', '$nama_matkul', '$jam_matkul', '$ruang_kelas')";

	if(mysqli_query($conf, $sql)){
		header("location:select.php");
	} else{
		echo "ERROR: Could not able to execute $sql. " .mysqli_error($conf);
	}
	

?>
