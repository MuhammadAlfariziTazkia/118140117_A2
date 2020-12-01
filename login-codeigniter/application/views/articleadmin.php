<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Article</title>
 </head>
 <body>
 	<table cellspacing="8">
 		<tr>
 			<td>ID</td>
 			<td>Kegiatan</td>
 			<td>Actor</td>
 			<td>Aksi</td>
 		</tr>
 		<?php foreach($user as $unitkegiatan)  : ?>
 			<tr>
 				<td><?= $unitkegiatan->id?></td>
 				<td><?= $unitkegiatan->Kegiatan?></td>
 				<td><?= $unitkegiatan->actor?></td>
 				<td><a href="<?= base_url('user/formedit/'). $unitkegiatan->id?>">Ubah</a><a href="<?= base_url('user/aksidelete/'). $unitkegiatan->id;?>">Hapus</a></td>
 			</tr>
 		<?php endforeach; ?>
 	</table>
 	<a href="<?= base_url('user/forminputadmin');?>"><button>Tambah Data</button></a>
 </body>
 </html>