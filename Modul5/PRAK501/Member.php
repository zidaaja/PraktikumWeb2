<?php
    require 'Model.php';
    if (isset($_GET['id_member'])) {
        deleteMember($_GET['id_member']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
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
    <h1>Daftar Member</h1>
    <a href="FormMember.php"><button>Tambah Data</button></a>

    <table>
        <tr>
            <th>Nama Member</th>
            <th>No.Member</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th>Tanggal Bayar</th>
            <th>Aksi</th>
        </tr>
        <?php 
            tampilkan("member");
        ?>
    </table>
</body>
</html>