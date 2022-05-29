<?php session_start();
    if(!isset($_SESSION['nomor_member'])){
        echo "<script>;
            location='ErrorPage.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        h1{font-family: arial; font-size:35px; background-color: lightgrey; text-align: center}
        body{background-color: lightblue;}
        li{font-size: 20px;}
    </style>
</head>
<body>
    <h1>Selamat Datang di Website Sederhana Perpustakaan</h1>
    <h2>Silahkan klik salah satu menu berikut: </h2>
  
    <li><a href="Buku.php">Daftar Buku</a></li>
    <li><a href="Member.php">Daftar Member</a></li>
    <li><a href="Peminjaman.php">Daftar Tanggal Peminjaman</a></li>

    <a href="Logout.php"><button type="submit" class="btn btn-primary mb-3" name="login">Logout</button></a>
</body>
</html>