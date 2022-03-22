<?php
    error_reporting(0);
        if(isset($_POST['submit'])){
            $nama=$_POST['nama'];
            $nim=$_POST['nim'];
            $gender=$_POST['gender'];
        }
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <style>
            text{
                color: red;
            }
        </style>
        <form actions="" method="post">
            Nama : <input type="text" name="nama" > <text>* 
                <?php if(isset($_POST['submit'])) if($nama == "") echo "Nama tidak boleh kosong"?>
            </text> <br>
            NIM : <input type="text" name="nim" > <text>* 
            <?php if(isset($_POST['submit'])) if($nim == "") echo "NIM tidak boleh kosong"?>
            </text> <br>
            Jenis Kelamin : <text>* 
            <?php if(isset($_POST['submit'])) if($gender == "") echo "Jenis kelamin tidak boleh kosong"?>
            </text> <br>
            <input type="radio" id="male" name="gender" value="Laki-Laki">
            <label for="male">Laki-laki</label><br>
            <input type="radio" id="female" name="gender" value="Perempuan">
            <label for="female">Perempuan</label><br>
            <input type="submit" name="submit" value="Submit">
        </form>
        
        <?php
            if(($nama != "") and ($nim != "") and ($gender != "")){
                echo $nama."</br>";
                echo $nim."</br>";
                echo $gender."</br>";
            }
        ?>
    </body>
</html>