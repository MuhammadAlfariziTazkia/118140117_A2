<?php 
	include "koneksi.php";

	$nim = $_POST['updatenim'];
	$nama = $_POST['updatenama'];
	$prodi = $_POST['updateprodi'];
	$angkatan = $_POST['updateangkatan'];

	$sql = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', prodi = '$prodi', angkatan = '$angkatan'";

	$hasil = mysqli_query($kon, $sql);
	if($hasil){
		echo "yes";
	}else{
		echo "no";
	}
 ?>