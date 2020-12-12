<div id="halaman"></div>
<table cellspacing="0" border="1" cellpadding="7">
	<tr>
		<td>NIM</td>
		<td>Nama</td>
		<td>Prodi</td>
		<td>Angkatan</td>
		<td>Aksi</td>
	</tr>
	<?php 
		include "koneksi.php";
		$hasil = mysqli_query($kon, "SELECT * FROM mahasiswa");
		while($data = mysqli_fetch_array($hasil)):
	 ?>

	 <tr>
	 	<td> <?= $data['nim']; ?></td>
	 	<td> <?= $data['nama']; ?></td>
	 	<td> <?= $data['prodi']; ?></td>
	 	<td> <?= $data['angkatan']; ?></td>
	 	<td><button type="submit" id="hapus">Hapus</button>
	 		<a href="">update</a>
	 	</td>
	 </tr>
	 <script>
	$(document).ready(function(){
		$('#hapus').click(function(){
			var data = <?=$data['nim']?>;
			$.get('hapus.php', {nim : data});
			$('#tampilan').load('tampil.php');
		});
	});
</script>
	<?php endwhile; ?>
</table>
</div>