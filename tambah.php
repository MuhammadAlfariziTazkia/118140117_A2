<?php 
	include "koneksi.php";

	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$prodi = $_POST['prodi'];
	$angkatan = $_POST['angkatan'];

	$sql = "INSERT INTO mahasiswa VALUES (
	'$nim', '$nama', '$prodi', '$angkatan')";

	$hasil = mysqli_query($kon, $sql);
	if($hasil){
		echo "yes";
	}else{
		echo "no";
	}
 ?>