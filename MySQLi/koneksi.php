<?php 
	$koneksi = mysqli_connect("localhost", "root", "", "dbprakweb" ) or die("koneksi gagal");

	mysqli_select_db($koneksi, "dbprakweb");

	function tambahData($nim, $nama, $alamat, $idjur){
		global $koneksi;
		$query = "INSERT INTO `mahasiswa` VALUES ('$nim', '$nama', '$alamat', '$idjur');";
		mysqli_query($koneksi, $query);
		return (mysqli_affected_rows($koneksi));
	}

	function tampilkanData($nama){
		global $koneksi;
		$query = "SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.alamat, jurusan.nama FROM mahasiswa,jurusan WHERE mahasiswa.id_jur = jurusan.id_jur AND mahasiswa.nama = '$nama';";
		$hasil = mysqli_query($koneksi, $query);
		$arrayData = [];
		while($record = mysqli_fetch_array($hasil)){
			$arrayData[] = $record;
		}
		return $arrayData;
	}

	function deleteData($nim){
		global $koneksi;
		$query = "DELETE FROM mahasiswa WHERE nim='$nim'";
		mysqli_query($koneksi, $query);
		return (mysqli_affected_rows($koneksi));
	}
 ?>