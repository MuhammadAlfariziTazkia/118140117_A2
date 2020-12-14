<?php 
	include "koneksi.php";

	$nim = $_POST['nim'];

	$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
	mysqli_query($kon, $sql);
 ?>
