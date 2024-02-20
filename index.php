<?php
include 'login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
    <div class="row justify-content-center">
        <div class="col md-6">
            <div class="card">
                <div class="card-header">
                <h1>LOGIN Admin</h1>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="">NIP (Nomor Induk Pegawai)</label>
                            <input type="number" name="nip" class="form-control" placeholder="Nomor Induk Pegawai">
                        </div>
                        <div class="form-group">
                            <label for="">Kata Sandi</label>
                            <input type="password" name="passw" class="form-control" placeholder="Kata Sandi">
                        </div>
                        <input type="submit" class="btn btn-success" name="masuk" value="Masuk">
                    </form>
                </div>
            </div>
        </div>
    </div>


    </div>


  <script src="js/bootstrap.min.js"></script>
</body>

</html>