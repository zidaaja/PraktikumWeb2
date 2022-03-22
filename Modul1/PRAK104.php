<?php
    $hp = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
    $awal = "Daftar Smartphone Samsung";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            table, td, tr{
                border: 1px solid black;
            }
            text{
                font-weight: bold;
            }
        </style>
        <meta charset="UTF-8">
    </head>
    <body>
        <table>
            <tr><td><text><?php echo $awal?></td></tr>
            <?php for($i = 0; $i <= 3; $i++){
                echo "<tr><td>$hp[$i]</td></tr>";}
            ?>
        </table>
    </body>
</html>