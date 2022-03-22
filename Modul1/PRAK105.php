<?php
    $hp = ['hp1' => "Samsung Galaxy S22",'hp2' =>  "Samsung Galaxy S22+",'hp3' =>  "Samsung Galaxy A03", 
    'hp4' =>  "Samsung Galaxy Xcover 5"];
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
                font-size: 25px;
                background-color: red;
            }
        </style>
        <meta charset="UTF-8">
    </head>
    <body>
        <table>
            <tr style="background-color: red;">
                <th style="height: 55px;"><text><?php echo $awal?></th>
            </tr>
            <tr>
                <td>
                    <?php echo "$hp[hp1]";?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "$hp[hp2]";?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "$hp[hp3]";?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php echo "$hp[hp4]";?>
                </td>
            </tr>
        </table>
    </body>
</html>