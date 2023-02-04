<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$informasi = $_POST['informasi'];

mysqli_query($mysqli, "update admin set nama= id='$id',nama='$nama',tanggal='$tanggal',informasi='$informasi'");


	header("location :admin.php");



?>
