<html>
<head>
	<title>tambah event</title>
</head>

<body  style="background-image:url(b22.jpg);
background-size:cover;">
<h2>|selamat datang di halaman penambahan event|</h2>
<hr>

	<fieldset>
		<legend>tambah event</legend>
		<form action="proses_tambah_event.php" method="post" >

		<table>
			<tr>
				<td>Nama event:</td>
				<td><input type="text" name="nama" placeholder="masukkan event..."></td>
			</tr>

            <tr>
				<td>tanggal event:</td>
				<td><input type="date" name="tanggal" title="masukkan tanggal "></td>
			</tr>
            <tr>
				<td>informasi event:</td>
				<td><textarea  style="width: 645px ; height: 275" name="informasi" placeholder="masukkan informasi..."></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
			
		</table>
		</fieldset>
		<br>
		<a href="admin.php">kembali</a>
	<hr>
	<p> Copyright &copy SMK LUKMAN AL HAKIM KUDUS</p>
	</form>
</body>
</html>

