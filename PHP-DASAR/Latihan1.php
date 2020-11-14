<?php 

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tugas 2</title>
 </head>
 <body>
 	<form action="" method="post">
 		<label for="bil1">Bilangan 1 : </label><input type="number" id="bil1" name="bil1" required>
 		<br><br>
 		<label for="bil2">Bilangan 2 : </label>
 		<input type="number" id="bil2" name="bil2" required>
 		<br><br>
 		<button type="submit" name="submit">Submit</button>
 	</form>
 	<?php 	
 		if(isset($_POST["submit"])){
 			$bil1 = $_POST["bil1"];
 			$bil2 = $_POST["bil2"];
 			echo "<br><br>";
 			echo "Bilangan 1 = " .$bil1;
 			echo "<br>";
 			echo "Bilangan 2 = " .$bil2;
 			echo "<br><br>Berikut merupakan hasil dari setiap operasi <br><br>";
 			echo "PENJUMLAHAN <br> ";
 			echo "Operator : + <br>";
 			echo "Hasil : ";
 			echo $bil1+$bil2;
 			echo "<br><br>";
 			echo "PENGURANGAN <br> ";
 			echo "Operator : - <br>";
 			echo "Hasil : ";
 			echo $bil1-$bil2;
 			echo "<br><br>";
 			echo "PERKALIAN <br> ";
 			echo "Operator : * <br>";
 			echo "Hasil : ";
 			echo $bil1*$bil2;
 			echo "<br><br>";
 			echo "PEMBAGIAN <br> ";
 			echo "Operator : / <br>";
 			echo "Hasil : ";
 			echo $bil1/$bil2;
 			echo "<br><br>";
 			echo "MODULUS <br> ";
 			echo "Operator : % <br>";
 			echo "Hasil : ";
 			echo $bil1%$bil2;
 		}
 	 ?>
 </body>
 </html>