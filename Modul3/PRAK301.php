<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
        #red{color : red; font-size : 20px; font-weight : bold;}
        #green{color : green; font-size : 20px;}
    </style>
    <form actions="" method="post">
            Jumlah Peserta : <input type="text" name="jumlah" 
            value=<?php if(isset($_POST['cetak'])){echo $_POST['jumlah'];}?>>
            <br/>
            <input type="submit" name="cetak" value="Cetak">
    </form>
    <?php
        if(isset($_POST['cetak'])){
            $jumlah=$_POST['jumlah'];
            $i = 1;
            while($i <= $jumlah){
                echo "<br/><br/>";
                if($i % 2 == 1){
                    echo "<label id='red'>Peserta ke-$i";
                } else {
                    echo "<label id='green'>Peserta ke-$i";
                }
                $i++;
            }
        }
    ?>
</body>
</html>