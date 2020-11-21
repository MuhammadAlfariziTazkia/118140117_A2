<?php 	
	include "koneksi.php";
	if(isset($_POST['submit'])){
		$hasil = tambahData($_POST['NIM'], $_POST['nama'], $_POST['alamat'], $_POST['id']);
		if($hasil > 0){
			echo "<script>
			alert('Data berhasil ditambah!') </script>";
		}else{
			echo "<script>
			alert('Data gagal ditambah!') </script>";
		}
	}
	if(isset($_POST['delete'])){
		$hasil = deleteData($_POST['deleteNIM']);
		if($hasil>0){
			echo "<script>
			alert('Data berhasil dihapus!') </script>";
		}else{
			echo "<script>
			alert('Data gagal dihapus!') </script>";
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>DATA MAHASISWA ITERA</h1>
<hr>
<h2>TAMBAH DATA</h2>
<form method="post">
	<table>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="NIM" required></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" required></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" style="margin: 0px; width: 172px; height: 47px;"></textarea></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><select name="id">
				<option value="IF">Teknik Informatika</option>
				<option value="TM">Teknik Mesin</option>
				<option value="ARS">Arsitektur</option>
			</select></td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td>&nbsp</td>
		</tr>
		<tr>
			<td>&nbsp</td>
			<td>&nbsp</td>
			<td><button type="submit" name="submit">Tambah</button></td>
		</tr>
	</table>
</form>
<br>
<hr>
<h2>SEARCH DATA</h2>
<form method="post">
	<label for="searchnama">Nama :</label>
	<input type="text" name="searchnama" id="searchnama">
	<button type="submit" name="search">Cari Data</button>
</form>

<?php 
if(isset($_POST['search'])){
		$data = tampilkanData($_POST['searchnama']); ?>
		<br>
		<h3>Hasil Pencarian</h3>
		<table cellspacing="0" cellpadding="8" border="1">
			<tr>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Nama Jurusan</th>
			</tr>
			<?php foreach ($data as $hasil): ?>
				<tr>
					<td><?=$hasil[0]?></td>
					<td><?=$hasil[1]?></td>
					<td><?=$hasil[2]?></td>
					<td><?=$hasil[3]?></td>
				</tr>
			<?php endforeach ?>
		</table>
<?php } ?>
<br>
<hr>
<h2>DELETE DATA</h2>
<form method="post">
	<label for="deleteNIM">NIM : </label>
	<input type="text" name="deleteNIM" id="deleteNIM">
	<button type="submit" name="delete" onclick="return confirm('Apakah anda yakin menghapus data <?=$_POST["deleteNIM"];?>?')">Delete</button>
</form>
</body>
</html>