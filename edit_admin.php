<?php

include "koneksi.php";
$id = $_GET ['id'];
$tampil = mysqli_query($mysqli,"select * from admin where id= '$id'");
$hasil = mysqli_fetch_array($tampil);

?>
<body style="background-image:url(b.jpg);
background-size:cover;">
<h2 align="center"> ada kesalahan saat memasukkan informasi ubah saja</h2>
<hr>
<form action="proses_edit_admin.php" method="post">
	<fieldset>
		<legend align="center">ubah disini</legend>
	<table align="center">
	
			<br>
			<br>

		<tr>
			<td>nama</td>
			<td><input type="hidden" name="id" value="<?php echo $hasil ['id']?>">
				<input type="text" name="nama" value="<?php echo $hasil ['nama']?>">
			</td>
		</tr>
		<tr>
			<td>tanggal event</td>
			<td><input type="date" name="tanggal" value="<?php echo $hasil ['tanggal']?>"></td>
		</tr>

		
		<tr>
			<td>informasi</td>
			<td><textarea  name="informasi" value="<?php echo $hasil ['informasi']?>" ></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="edit" name="kirim"></td>
		</tr>
	</table>
	<br>
			<br>
	
</fieldset>
<hr>
<p align="center">copyright &copy SMK LUKMAN AL HAKIM KUDUS</p>
</form>
</body>

