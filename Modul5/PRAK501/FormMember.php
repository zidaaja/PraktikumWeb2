<?php 
    require 'Model.php';
    if (isset($_GET['id_member'])) {
        editMember();
    }

    if (isset($_POST['submit'])) {
        $tgl_daftar = date_create($_POST['tgl_daftar']);
        $tgl_daftar = date_format($tgl_daftar,"Y-m-d H:i:s");
        print_r($_POST);
        insertMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
    if (isset($_POST['update'])) {
        $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
        updateMember($_GET['id_member'],$_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Member</title>
    <style>
        table{padding:10px;}
        button{align: right;}
        h2{font-family: arial; font-size:30px; background-color: lightgrey; text-align: center;}
        body{background-color: lightblue;}
        button{background-color: yellow; font-family: arial; font-style: bold;}
    </style>
</head>
<body>
    <h2>Form Tambah Member</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td><br>
                <td>: 
                    <input type="text" name="nama_member" <?php echo (isset($_GET['id_member'])) ?  
                    "value = " . $result[0]["nama_member"] . "" : "value = '' "; ?> required> <br/>
                </td>
            </tr>
            <tr>
                <td>No.Member</td>
                <td>: 
                    <input type="text" name="nomor_member" <?php echo (isset($_GET['id_member'])) ?  
                    "value = " . $result[0]["nomor_member"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: 
                    <input type="text" name="alamat" <?php echo (isset($_GET['id_member'])) ?  
                    "value = " . $result[0]["alamat"] . "" : "value = '' "; ?> required>
                    <br>
                </td>
            </tr>
            <tr>
                <td>Tanggal Mendaftar</td>
                <td>: 
                    <input type="datetime-local" name="tgl_daftar" <?php echo (isset($_GET['id_member'])) ?  
                    "value = " .date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>Tanggal Terakhir Bayar</td>
                <td>: 
                    <input type="date" name="tgl_terakhir_bayar" <?php echo (isset($_GET['id_member'])) ?  
                    "value = " . $result[0]["tgl_terakhir_bayar"] . "" : "value = '' "; ?> required><br>
                </td>
            </tr>
            <tr>
                <td>
                    <?php 
                        if (isset($_GET['id_member'])) {
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
