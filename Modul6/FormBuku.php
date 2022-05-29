<?php 
    require 'Model.php';
    session_start();
    if (isset($_GET['id_buku'])) {
        editBuku();
    }

    if (isset($_POST['submit'])) {
        insertBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thn_terbit']);
    }
    if (isset($_POST['update'])) {
    updateBuku($_GET['id_buku'],$_POST['judul'],$_POST['penulis'],$_POST['penerbit'],$_POST['thn_terbit']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Buku</title>
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
                <td>Judul Buku</td>
                <td>: 
                    <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  
                    "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>Nama Penulis</td>
                <td>: 
                    <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  
                    "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>: 
                    <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  
                    "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>Tahun Terbit</td>
                <td>: 
                    <input type="text" name="thn_terbit" <?php echo (isset($_GET['id_buku'])) ?  
                    "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        if (isset($_GET['id_buku'])) {
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