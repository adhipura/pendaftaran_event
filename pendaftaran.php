<html>
<head>
	<title>pendaftaran</title>
</head>

<body  style="background-image:url(b7.jpg);
background-size:cover;">
<h2 align="center">|selamat datang di halaman pendaftaran|</h2>
<hr>
	<form action="proses_pendaftaran.php" method="POST">
	<fieldset>
		<legend>daftar</legend>
        <br>
        <br>
		<table align="center">
			<tr>
				<td>Nama:</td>
				<td><input type="text" name="nama" placeholder="masukkan username..."></td>
			</tr>
			<tr>
				<td>Email:</td>
				<td><input type="email" name="email" placeholder="masukkan email..."></td>
			</tr>
            <tr>
				<td>tanggal lahir:</td>
				<td><input type="date" name="tanggal_lahir" title="masukkan tanggal lahir"></td>
			</tr>
            <tr>
				<td>alamat:</td>
				<td><textarea name="alamat" placeholder="masukkan alamat..."></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="Daftar"></td>
			</tr>
			
		</table>
		<br>
		<br>
		</fieldset>
		<br>
	<hr>
	<p> Copyright &copy SMK LUKMAN AL HAKIM KUDUS</p>
	</form>
</body>
</html>

