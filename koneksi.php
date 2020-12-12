<?php 
$host = "localhost" ;
$user = "root";
$password="";
$db = "dbprakweb6";
$kon = mysqli_connect($host, $user, $password, $db);
if(!$kon){
	die("koneksi gagal");
}
?>