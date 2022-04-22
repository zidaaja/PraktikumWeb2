<?php
    $data = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
    ]; $n = count($data);

    for ($i=0; $i < $n; $i++) { 
        $data[$i]["akhir"] = $data[$i]["uts"] * (40/100) + $data[$i]["uas"] * (60/100);
        if ($data[$i]["akhir"] >= 80) {
            $data[$i]["huruf"] = "A";
        } elseif ($data[$i]["akhir"] >= 70) {
            $data[$i]["huruf"] = "B";
        } elseif ($data[$i]["akhir"] >= 60) {
            $data[$i]["huruf"] = "C";
        } elseif ($data[$i]["akhir"] >= 50) {
            $data[$i]["huruf"] = "D";
        } else {
            $data[$i]["huruf"] = "E";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 402</title>
    
    <style>
        table{border-collapse : collapse; border : solid 1px; width : 650px; height : 150px; text-align : left;}
        tr, th, td{border-collapse : collapse; border : solid 1px; padding : 5px;}
    </style>
</head>
<body>
    <table width=>
        <tr style="background-color:lightgrey;">
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai Uas</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
            for ($i=0; $i < $n; $i++) { 
                echo "<tr>";
                echo "<td>".$data[$i]["nama"]."</td>";
                echo "<td>".$data[$i]["nim"]."</td>";
                echo "<td>".$data[$i]["uts"]."</td>";
                echo "<td>".$data[$i]["uas"]."</td>";
                echo "<td>".$data[$i]["akhir"]."</td>";
                echo "<td>".$data[$i]["huruf"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>