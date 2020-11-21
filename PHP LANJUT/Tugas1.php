<?php 
	function faktorial($angka){
		$hasil = $angka;
		for($i=$angka-1;$i>1;$i--){
			$hasil = $hasil*$i;
		}
		return $hasil;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Perhitungan Faktorial</h1>
	<form method="post">
		Masukan Bilangan <br>
		<input type="number" name="angka">
		<button name="submit">submit</button>
	</form>
	<br>
	<?php 
		if(isset($_POST['submit'])){	
		echo "Hasil Faktorial : " .faktorial($_POST['angka']);
	}
	 ?>
</body>
</html>