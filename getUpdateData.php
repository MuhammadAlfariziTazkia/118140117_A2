<?php 
	require "koneksi.php";
	$nim = $_POST['nim'];
	$result = array();
	$sql = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
	$execute = mysqli_query($kon, $sql);
	$selectData = mysqli_fetch_assoc($execute);
	$result = $selectData;
	echo json_encode($result);
 ?>