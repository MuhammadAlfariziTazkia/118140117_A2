<?php 
function penghitung(){
	$nama = $_POST['nama'];
	$namaBaru = str_replace(' ', '', $_POST['nama']);
	$panjang = strlen($namaBaru);
	if($panjang>=1 && $panjang<=10){
		$harga = $panjang*300;
	}else if($panjang>=11 && $panjang<=20){
		$harga = $panjang*500;
	}else if($panjang>=21){
		$harga = $panjang*700;
	}
	return $harga;
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		input{
			margin: 5px;
			display: block;
			height: 20px;
			width: 150px;
		}
		button{
			margin: 10px;
		}
	</style>
</head>
<body>
	<h1>Perhitungan Harga Badge Nama</h1>
	<form method="post">
		<input type="text" name="nama" placeholder="Masukan Nama" required="">
		<input type="text" name="warna" placeholder="Masukan Warna Font" value="red">
		<button type="submit" name="cek">Cek</button>
	</form>

	<?php if(isset($_POST['cek'])): ?>
		<table style="color: <?=$_POST['warna'];?>">
			<tr>
				<td>Nama </td>
				<td>:</td>
				<td><?=$_POST['nama'];?></td>
			</tr>
			<tr>
				<td>Harga </td>
				<td>:</td>
				<td><?=penghitung();?></td>
			</tr>
		</table>
	<?php endif ?>
</body>
</html>