<?php
    $jumlah = 0;
    if (isset($_POST['jumlah'])) {
        $jumlah = $_POST['jumlah'];
    }

    if (isset($_POST['tambah'])) {
        $jumlah++;
    } else if (isset($_POST['kurang'])) {
        $jumlah--;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if ($jumlah == 0) : ?>
            <form method="POST" action="">
                Jumlah Bintang <input type="text" name="jumlah"><br>
                <input type="submit" value="Submit" name="submit">
            </form>
    <?php 
    endif;

        if (isset($_POST['jumlah']))
            echo "Jumlah Bintang : $jumlah<br>";

        for ($i = 0; $i < $jumlah; $i++) {
            echo '<img src="star.png" width = "50" height = "50">';
        }

        if ($jumlah != 0) : ?>
            <form action="" method="POST">
                <input type='hidden' name='jumlah' value='<?= $jumlah; ?>' />
                <input type="submit" value="Tambah" name="tambah">
                <input type="submit" value="Kurang" name="kurang">
            </form>
    <?php 
    endif; 
    ?>
</body>
</html>