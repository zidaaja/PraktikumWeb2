<?php 
    require 'Model.php';
    if (isset($_GET['id_peminjaman'])) {
        editpeminjaman();
    }

    if (isset($_POST['submit'])) {
        insertPeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        updatePeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peminjaman</title>
    <style>
        table{padding:10px;}
        button{align: right;}
        h2{font-family: arial; font-size:30px; background-color: lightgrey; text-align: center;}
        body{background-color: lightblue;}
        button{background-color: yellow; font-family: arial; font-style: bold;}
    </style>
</head>
<body>
    <h2>Form Tambah Buku</h2>

    <form action="" method="post">
        <table>
            <tr>
                <td>Tanggal Peminjaman</td>
                <td>
                    <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  
                        "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>Tanggal Kembali</td>
                <td>
                    <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  
                    "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        if (isset($_GET['id_peminjaman'])) {
                            echo "<button type='submit' name='update'>Update</button>";
                        }else {
                            echo "<button type='submit' name='submit'>Tambah</button>";
                        }
                    ?>
                </td>
                <td></td>
            </tr>
        </table>
    </form>
</body>
</html>