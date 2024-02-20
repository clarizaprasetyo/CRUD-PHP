<?php
include ("../config.php");
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $namapaket = $_POST['nama_paket'];
    $keterangan = $_POST['keterangan'];
    $hargapaket = $_POST['harga_paket'];
        

    $hasil = mysqli_query($mysqli, "UPDATE paket SET nama_paket='$namapaket',keterangan='$keterangan',harga_paket='$hargapaket' WHERE id_paket='$id'");
    
    echo "<script>alert('Berhasil Mengubah Data Paket!');
                document.location='admin.php';</script>";
};
?>

<?php
$id = $_GET['id'];
 
$hasil = mysqli_query($mysqli, "SELECT * FROM paket WHERE id_paket=$id");
 
while($produk_paket = mysqli_fetch_array($hasil))
{
    $id = $produk_paket['id_paket'];
    $namapaket = $produk_paket['nama_paket'];
    $keterangan = $produk_paket['keterangan'];
    $hargapaket = $produk_paket['harga_paket'];
};
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Paket</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Paket</li>
        </ol>
	</nav>

<div class="container mt-3">
		<div class="card shadow p-3 mb-5 bg-light rounded">
		    <div class="card-header bg-warning">
			Edit Data Paket
		    </div>
		    <div class="card-body">
            <form class="form-group" action="editpaket.php" method="post" name="update" >
                <label class="form-label">Nama Paket</label>
                    <input class="form-control" type="text" name="nama_paket" value="<?php echo $namapaket;?>">
                
                <label class="form-label">Keterangan </label>
                    <input class="form-control" type="text" name="keterangan" value="<?php echo $keterangan;?>">
                
                <label class="form-label">Harga</label>
                    <input class="form-control" type="text" name="harga_paket" value="<?php echo $hargapaket;?>"><br>

                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                <br>
                <input class="btn btn-primary" type="submit" name="update" value="Perbarui">

            </form>
		    </div>
	    </div>

   <br>
<a href="admin.php" class="btn btn-link"> < Kembali</a>

</div>

  <script src="../js/bootstrap.min.js"></script>
</body>
</html>