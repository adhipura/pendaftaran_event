<html>
<head>
	<title>home</title>
</head>
<body style="background-image:url(bgrn.jpg);
background-size:cover;">

<h1 align="center">selamat datang di halaman utama :v</h1>
<hr>
<p align="center"><a href="tambah_event.php">tambah event</a>|
<a href="tampil_pendaftar.php">data pendaftar </a>|
<a href="index.php" >LOGOUT</a></p>
<fieldset>
	<legend>Daftar event</legend>


<?php
      include "koneksi.php"

      ?>
      <h2 align="center">DATA EVENT</h2>
      <table border="2" width="50%"  cellpadding="10" align="center" bgcolor="white">
      	<tr>
      		<td colspan="1">nomer</td>
      		<td >nama event</td>
      		<td align="center" colspan="2">tanggal event</td>
      		<td align="center" colspan="6">informasi</td>
      		<td align="center" colspan ="2">opsi</td>      	</tr>
      	<?php

      	$tampil = mysqli_query($mysqli,"select*from admin");
      	$no= 1;
      	while ($hasil = mysqli_fetch_array($tampil)){
      		?>
      		<tr>
      			<td  align="center" colspan="1"><?php echo $no++;?></td>
      			<td>                            <?php echo $hasil['nama'];?></td>
       			<td  align="center" colspan="2"><?php echo $hasil['tanggal'];?></td>
      			<td colspan="6">                <?php echo $hasil['informasi'];?></td>

      			<td>
      				<a href =" edit_admin.php?id=<?php echo $hasil['id'];?>">edit</a>|

      				<a href = " hapus_admin.php?hapus&id=<?php echo $hasil['id'];?>">hapus</a>
      			</td>
      			
      			
      		</tr>


      		<?php
      	}
      	?>

      	
      </table>
      <br>
      <br>
      <br>
      <br>
      
  </fieldset>
  <hr>
  <p align="center">Copyright &copy |SMK LUKMAN ALHAKIM KUDUS></p>
  </body>
  </html>
