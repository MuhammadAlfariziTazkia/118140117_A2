<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Input Data</title>
 </head>
 <body>

 	<form method="post" action="<?= base_url('user/aksiedit');?>">
 		<input type="text" name="kegiatan" placeholder="Nama Kegiatan" value="<?=$user->Kegiatan?>">
	 	<br><br>
	 	<input type="text" name="id" value="<?=$user->id?>" hidden="">
	 	<input type="text" name="user" value="<?=$user->actor?>" hidden="">
	 	<button type="submit">Submit</button>
 	</form>

 </body>
 </html>