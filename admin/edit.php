<?php
include_once("../config.php");
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $namasales = $_POST['nama_sales'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $tgl_daftar = $_POST['tgl_daftar'];
    $gender = $_POST['gender'];
    $nip = $_POST['nip'];
        

    $hasil = mysqli_query($mysqli, "UPDATE idnsales SET nama_sales='$namasales',tgl_lhr='$tgl_lhr',tgl_daftar='$tgl_daftar',gender='$gender',nip='$nip' WHERE id_sales='$id'");
    
    echo "<script>alert('Berhasil Mengubah Data!');
                document.location='admin.php';</script>";
}
?>

<?php
$id = $_GET['id'];
 
$hasil = mysqli_query($mysqli, "SELECT * FROM idnsales WHERE id_sales=$id");
 
while($data = mysqli_fetch_array($hasil))
{
    $id = $data['id_sales'];
    $namasales = $data['nama_sales'];
    $tgl_lhr = $data['tgl_lhr'];
    $tgl_daftar = $data['tgl_daftar'];
    $gender = $data['gender'];
    $nip = $data['nip'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Akun Sales</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>

	<nav class="navbar" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Akun Sales</li>
        </ol>
	</nav>

<div class="container mt-3">
		<div class="card shadow p-3 mb-5 bg-light rounded">
		    <div class="card-header bg-success text-white">
			Edit Akun Sales
		    </div>
		    <div class="card-body">
            <form class="form-group" action="edit.php" method="post" name="update" >
                	<label class="form-label">Nama</label>
					<input type="text" class="form-control" name="nama_sales" value="<?php echo $namasales;?>">

					<label class="form-label">Tanggal Lahir</label>
					<input type="date" class="form-control" name="tgl_lhr" value="<?php echo $tgl_lhr;?>"> 

					<label class="form-label">Tanggal Daftar</label>
					<input type="date" class="form-control" name="tgl_daftar" value="<?php echo $tgl_daftar;?>">

					<label class="form-label">Jenis Kelamin</label>
						<label class="form-label">Jenis Kelamin</label>
						<select name="gender" id="" class="form-control">
							<option value="<?php echo $gender;?>"><?php echo $gender;?></option>
							<option value="Pria">Pria</option>
							<option value="Wanita">Wanita</option>
						</select>

					<label class="form-label">NIP(Nomor Induk Pegawai)</label>
					<input type="number" class="form-control" name="nip" value="<?php echo $nip;?>"><br>

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