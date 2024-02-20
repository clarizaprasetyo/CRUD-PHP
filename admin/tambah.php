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
		<li class="breadcrumb-item active" aria-current="page">Tambah Akun Sales</li>
	</ol>
	</nav>

<div class="container mt-3">
	<br>
		<div class="card shadow p-3 mb-5 bg-light rounded">
			<div class="card-header bg-success text-white">
				Tambah Akun Sales
			</div>
			<div class="card-body ">
				<form action="tambah.php" method="post" name="form" class="form-group">
						<label class="form-label">Nama</label>
						<input type="text" class="form-control" name="nama_sales">

						<label class="form-label">Tanggal Lahir</label>
						<input type="date" class="form-control" name="tgl_lhr">

						<label class="form-label">Tanggal Daftar</label>
						<input type="date" class="form-control" name="tgl_daftar">

						<label class="form-label">Jenis Kelamin</label>
						<select name="gender" id="" class="form-control">
							<option value="" disable selected>- Pilih Jenis Kelamin -</option>
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>

						<label class="form-label">NIP(Nomor Induk Pegawai)</label>
						<input type="number" class="form-control" name="nip"><br>

						<input type="submit" class="btn btn-primary" name="Submit" value="Tambah">
				</form>
			</div>
		</div>



	<?php

	if (isset($_POST['Submit'])) {

		$namasales = $_POST['nama_sales'];
		$tgl_lhr = $_POST['tgl_lhr'];
		$tgl_daftar = $_POST['tgl_daftar'];
		$gender = $_POST['gender'];
		$nip = $_POST['nip'];
		
		include ("../config.php");

		$hasil = mysqli_query($mysqli, "INSERT INTO idnsales(nama_sales,tgl_lhr,tgl_daftar,gender,nip) 
										VALUES ('$namasales','$tgl_lhr','$tgl_daftar','$gender','$nip')");

		echo "<script>alert('Berhasil Menambahkan Data!');
			document.location='admin.php';</script>";
	};
	?>

				<a href="admin.php" class="btn btn-link"> < Kembali</a>
</div>



  <script src="../js/bootstrap.min.js"></script>
</body>
</html>