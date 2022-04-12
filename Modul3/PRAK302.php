<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Tinggi : <input type="text" name="tinggi"
        value=<?php if(isset($_POST['cetak'])){$tinggi=$_POST['tinggi']; echo $tinggi;}?>>
        <br/>
        Alamat Gambar : 
        <input type="textbox" name="alamat"
        value=<?php if(isset($_POST['cetak'])){$alamat=$_POST['alamat']; echo $alamat;}?>>
        <br/>
        <input type="submit" name="cetak" value="Cetak">
    </form>

    <?php
        error_reporting(0);
        $alamat = $_POST['alamat'];
        $tinggi = $_POST['tinggi'];
        echo "<br/>";

        for ($i=0; $i < $tinggi; $i++) { 
            $a=0;
            $spasi="";
            while($a<=$i){
                $spasi .="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                $a++;
            }
            echo $spasi;
            $b=$tinggi;
            $bintang="";
            while($b>$i){
                $bintang .="<img src='$alamat' width='20' height='20' />";
                $b--;
            }
            echo $bintang."<br/>";
        }
        ?>
</body>
</html>