<?php
include 'config.php';

//proses login user
        if (isset($_POST['masuk'])) {
            $cek_data = mysqli_query($mysqli, "SELECT * FROM loginuser WHERE NIP = '".$_POST['nip']."' AND pass = '".$_POST['passw']."'");
            $data = mysqli_fetch_array($cek_data);
            $level = $data['level'];
            $nama = $data['nama'];
            if (mysqli_num_rows($cek_data) > 0) {
                session_start();
                $_SESSION['nama'] = $nama;
                if ($level == 'admin') {
                    header('location:admin/admin.php');
                }elseif($level == 'sales'){
                    header('location:sales/sales.php');
                }
            }else {
                echo ('<script>alert("Tidak Berhasil Masuk.\nNIP atau Kata Sandi Salah!")</script>');
            }
        }
?>