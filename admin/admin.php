<?php
include_once("../config.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin | Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
		<nav class="navbar bg-body-tertiary" >
		<div class="container-fluid">
			<span class="navbar-text">
			Dashboard | Admin
			</span>
			<span class="navbar-text text-right">
				<a href="../logout.php" class="btn btn-link">Log out</a>
			</span>
		</div>
		</nav><br>

<div class="container-fluid">
	<!-- Daftar Paket -->
		<div class="card">
		<div class="card-header">
			<h2>Daftar Paket</h2>
		</div>
		<div class="card-body">
				<a href="tambahpaket.php" class="btn btn-primary">Tambahkan Paket</a><br><br>
		<table class="table">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Aksi</th>
		</tr>
		<?php
		$no=1;
		$hasil = mysqli_query($mysqli, "SELECT * FROM paket");
    	while($produk_paket = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$produk_paket['nama_paket']."</td>";
        echo "<td>".$produk_paket['keterangan']."</td>";
          echo "<td>Rp. ".number_format($produk_paket['harga_paket']).",- </td>";    
        echo "<td>
		<a href='editpaket.php?id=$produk_paket[id_paket]' class='btn btn-dark btn-sm' >Edit</a> &nbsp; 
		<a href='hapus.php?id=$produk_paket[id_paket]' class='btn btn-danger btn-sm' >Hapus</a></td></tr>";        
    }
    ?>
		</table>
		</div>
		</div><br>

<!-- Daftar Sales -->
		<div class="card">
		<div class="card-header">
			<h2>Daftar Sales</h2>
		</div>
		<div class="card-body">
				<a href="tambah.php" class="btn btn-primary">Tambahkan Akun</a><br><br>
		<table class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Tanggal Lahir</th>
			<th>Tanggal Daftar</th>
			<th>Gender</th>
			<th>NIP</th>
			<th>Aksi</th>
		</tr>
		<?php	
		$no = 1;
		$hasil = mysqli_query($mysqli, "SELECT * FROM idnsales");
    	while($data_sales = mysqli_fetch_array($hasil)) {         
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data_sales['nama_sales']."</td>";
        echo "<td>".$data_sales['tgl_lhr']."</td>";
        echo "<td>".$data_sales['tgl_daftar']."</td>";
        echo "<td>".$data_sales['gender']."</td>";
        echo "<td>".$data_sales['nip']."</td>";    
        echo "<td>
		<a href='edit.php?id=$data_sales[id_sales]' class='btn btn-dark btn-sm' >Edit</a> &nbsp; 
		<a href='hapus.php?id=$data_sales[id_sales]' class='btn btn-danger btn-sm' >Hapus</a></td></tr>";        
    }
    ?>
		</table>
		</div>
		</div>
</div>

  <script src="../js/bootstrap.min.js"></script>
</body>
</html>