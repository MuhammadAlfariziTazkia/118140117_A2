<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Input Data</title>
 </head>
 <body>
 	<form method="post" action="<?= base_url('user/aksiinputuser');?>">
 		<input type="text" name="kegiatan" placeholder="Nama Kegiatan" required="">
	 	<br><br>
	 	<button type="submit">Submit</button>
 	</form>
 </body>
 </html>