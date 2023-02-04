<!DOCTYPE html>
<html>
<head>
  <title>pendaftar</title>
</head>
<body  style="background-image:url(bg.jpg);
background-size:cover;">
 
  
  
</body >
</html>
  <?php
    include "koneksi.php";

  ?>
  <h2 align="center" style="font-style: white"> DATA PENDAFTAR</h2>
  <fieldset>
    <br>
    <br>
    <br>
    <legend>pendaftar</legend>
  <table border="1" align="center" width="60%" cellpadding="3" bgcolor="white">
    <tr>
      <td>NO</td>
      <td>Nama</td>
      <td>Email</td>
      <td>Tanggal</td>
      <td>Alamat</td>
    </tr>
  <?php
    $tampil= mysqli_query($mysqli, "select * from pendaftaran");
    $no = 1;
    
    while($hasil = mysqli_fetch_array($tampil)){
  ?>
  <tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $hasil['nama']; ?></td>
    <td><?php echo $hasil['email']; ?></td>
    <td><?php echo $hasil['tanggal_lahir']; ?></td>
    <td><?php echo $hasil['alamat']; ?></td>
      
  </tr>
  <?php
}
?>
</table>
<br>
<br>
<br>
</fieldset>
<hr>
<p>Copyright &copy | SMK LUQMAN AL HAKIM KUDUS
<p align="center"> <a href="admin.php">kembali</a>| 

</body>
</html>