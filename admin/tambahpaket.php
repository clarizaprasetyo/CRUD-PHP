<!DOCTYPE html>
<html>
<head>
	<title>Tambah Sales Baru</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="admin.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Tambah Daftar Paket</li>
	</ol>
	</nav>

<div class="container mt-3">
	<br>
		<div class="card shadow p-3 mb-5 bg-light rounded">
		<div class="card-header bg-warning">
			Tambah Daftar Paket
		</div>
		<div class="card-body">
			<form action="tambahpaket.php" method="post" name="form" class="form-group">
					<label class="form-label">Nama Paket</label>
					<input type="text" class="form-control" name="nama_paket">

					<label class="form-label">Keterangan</label>
					<input type="text" class="form-control" name="keterangan">
					
					<label class="form-label">Harga</label>
					<input type="text" class="form-control" name="harga_paket"><br>

					<input type="submit" class="btn btn-primary" name="submitPaket" value="Tambahkan">
			</form>
		</div>
	</div>

	
			<a href="admin.php" class="btn btn-link"> < Kembali</a>


	<?php

	if (isset($_POST['submitPaket'])) {
		$namapaket = $_POST['nama_paket'];
		$keterangan = $_POST['keterangan'];
		$hargapaket = $_POST['harga_paket'];

		include ("../config.php");

		$hasil = mysqli_query($mysqli, "INSERT INTO paket(nama_paket,keterangan,harga_paket) VALUES('$namapaket','$keterangan','$hargapaket')");
		echo "<script>alert('Berhasil Menambahkan Data Paket!');
			document.location='admin.php';</script>";
	}
	?>
</div>



  <script src="../js/bootstrap.min.js"></script>
</body>
</html>