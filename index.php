<!DOCTYPE html>
<html>
<head>
	<title>Portal Mahasiswa</title>
	<style type="text/css">
		.form{
			margin-bottom: 5px;
			margin-left: 5px;
		}
	</style>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>
<body>
<h1>FORM DATA MAHASISWA</h1>
	<form method="post" id="inputdata">
	<input type="number" name="nim" placeholder="Masukan NIM" class="form" required=""> <br>
	<input type="text" name="nama" placeholder="Masukan Nama" class="form" required="">	<br> <br>
	<label class="form">Prodi :</label><br>
	<select class="form" name="prodi">
		<option value="Teknik Informatika">Teknik Informatika</option>
		<option value="Arsitektur">Arsitektur</option>
		<option value="Teknik Sipil">Teknik Sipil</option>
	</select><br><br>
	<label class="form">Angkatan</label><br>
	<select class="form" name="angkatan">
		<option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
	</select>
	<br><br>
	<button id="tambah" type="submit">Tambah</button>
</form>
<br><br>

<div id="tampilan"></div>

<script>
	$(document).ready(function(){
		$('#tampilan').load("tampil.php");
		$('#tambah').click(function(){
			var data = $('#inputdata').serialize();
			$.ajax({
				type : 'POST',
				url : "tambah.php",
				data : data,
				cache : false,
				success : function(data){
					$('#tampilan').load("tampil.php");
				}
			});
		});
		$('#update').click(function(){
			var data = $('#updatedata').serialize();
			$.ajax({
				type : 'POST',
				url : "update.php",
				data : data,
				cache : false,
				success : function(data){
					$('#tampilan').load("tampil.php");
					$('#updatedata').reset();
				}
			});
		});
	});
</script>
</body>
</html>