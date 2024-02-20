<?php
include('../config.php');

$id = $_GET['id'];
 
$hasil = mysqli_query($mysqli, "DELETE FROM paket WHERE id_paket=$id");

echo "<script>alert('Berhasil Dihapus!');
			document.location='admin.php';</script>";
?>
<?php

 

$id = $_GET['id'];
 
$hasil = mysqli_query($mysqli, "DELETE FROM idnsales WHERE id_sales=$id");

echo "<script>alert('Berhasil Dihapus!');
			document.location='admin.php';</script>";
?>

