<?php
    require 'Model.php';
    session_start();
    if (isset($_GET['id_peminjaman'])) {
        deletePeminjaman($_GET['id_peminjaman']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peminjaman</title>
    <style>
        table,th,td{border-collapse: collapse; border: solid 1px; padding:10px; background-color: white;}
        table{width: 100%;}
        th{background-color: lightgrey;}
        button{align: right;}
        h1{font-family: arial; font-size:35px; background-color: lightgrey; text-align: center}
        body{background-color: lightblue;}
        button{background-color: yellow; font-family: arial; font-style: bold;}
    </style>
</head>
<body>
    <h1>Daftar Tanggal Peminjaman Buku</h1>
    <a href="FormPeminjaman.php"><button>Tambah Data</button></a>
    <table>
        <tr>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        <?php tampilkan("peminjaman") ?>
    </table>
    <a href="HalamanUtama.php">Kembali ke Halaman Utama</a>
</body>
</html>