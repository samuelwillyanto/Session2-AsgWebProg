<?php
    include 'connection.php';
    $kode_matkul   = $_GET['kode_matkul'];
    $sql = "DELETE FROM mata_kuliah WHERE kode_matkul = '$kode_matkul'";
    
    if(mysqli_query($conf, $sql)){
		header("location:select.php");
	} else{
		echo "ERROR: Could not able to execute $sql. " .mysqli_error($conf);
	}
?>