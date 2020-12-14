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
	 	<td><button type="submit" id="<?=$data['nim']?>" class="btnHapus">Hapus</button> <button type="submit" id="<?=$data['nim']?>" class="btnUpdate">update</button>
	 		
	 	</td>
	 </tr>
	 <script>
	$(document).ready(function(){
		$('.btnUpdate').click(function(){
			var nim = $(this).attr("id");
			$.ajax({
				type : "POST",
				data : "nim="+nim,
				url : "getUpdateData.php",
				success : function(result){
					var hasilResult = JSON.parse(result);
					$("[name = 'nim']").val(hasilResult.nim);
					$("[name = 'nama']").val(hasilResult.nama);
					$("[name = 'prodi']").val(hasilResult.prodi);
					$("[name = 'angkatan']").val(hasilResult.angkatan);
				}
			})
		});
		$('.btnHapus').click(function(){
			var nim = $(this).attr("id");
			console.log(nim);
			$.ajax({
				type : "POST",
				data : "nim="+nim,
				url : "hapus.php",
				success : function(result){
					$('#tampilan').load("tampil.php");
				}
			})
		});
	});
</script>
	<?php endwhile; ?>
</table>
</div>
