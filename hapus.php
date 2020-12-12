<?php 
	include "koneksi.php";

	$nim = $_GET['nim'];

	$sql = "DELETE FROM mahasiswa WHERE nim = '$nim'";
	mysqli_query($kon, $sql);
 ?>