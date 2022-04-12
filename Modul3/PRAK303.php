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
        Batas Bawah : <input type="text" name="bawah" value=<?php if(isset($_POST['submit'])){echo $_POST['bawah'];}?>>
        <br/>
        Batas Atas : <input type="text" name="atas" value=<?php if(isset($_POST['submit'])){echo $_POST['atas'];}?>>
        <br/>
        <input type="submit" value="Cetak" name="submit"> <br/><br/>
    </form>

    <?php
        if (isset($_POST['submit'])){
            $bawah=$_POST['bawah'];
            $atas=$_POST['atas'];

            $i=$bawah;
            do {
                if (($i+7)%5 == 0) {
                    echo "<img src='star.png' width='15' height='15'>";
                } else {
                    echo "$i";
                } echo " ";
                $i++;
            } while ($i <= $atas);
        }
    ?>
</body>
</html>