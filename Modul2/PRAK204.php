<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form actions="" method="post">
            Nilai : <input type="text" name="nilai" value=<?php if(isset($_POST['submit'])){$nilai=$_POST['nilai']; echo $nilai;} ?>> <br>
            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php
            error_reporting(0);
            if(isset($_POST['submit'])){
                $nilai=$_POST['nilai'];
                if(($nilai>1) and ($nilai<10)){
                    echo "<h1>Hasil : Satuan</h1>";
                } elseif($nilai == 0){
                    echo  "<h1>Hasil : Nol</h1>";
                } elseif($nilai >= 1000){
                    echo  "<h1>Hasil : Anda Menginput Melebihi Limit Bilangan</h1>";
                } elseif(($nilai>=100) and ($nilai<=999) ){
                    echo  "<h1>Hasil : Ratusan</h1>";
                } elseif(($nilai >= 11) and ($nilai <= 19)){
                    echo  "<h1>Hasil : Belasan</h1>";
                } else {
                    echo "<h1>Hasil : Puluhan </h1>";
                }
            }
        ?>
    </body>
</html>
