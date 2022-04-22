<?php
    $data = [
        ["no" => 1, "nama" => "Ridho", "mataKuliah" => [
            ["mk" => "Pemrograman I", "sks" => 2],
            ["mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
            ["mk" => "Arsitektur Komputer", "sks" => 3]
            ]
        ],
        ["no" => 2, "nama" => "Ratna", "mataKuliah" => [
            ["mk" => "Basis Data I", "sks" => 2],
            ["mk" => "Praktikum Basis Data I", "sks" => 1],
            ["mk" => "Kalkulus", "sks" => 3]
            ]
        ],
        ["no" => 3, "nama" => "Tono", "mataKuliah" => [
            ["mk" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["mk" => "Komputasi Awan", "sks" => 3], 
            ["mk" => "Kecerdasan Bisnis", "sks" => 3]
            ]
        ]
    ]; $n = count($data);

    for($i=0; $i<$n; $i++){
        $jumlahSks=0;
        for($j=0; $j<count($data[$i]["mataKuliah"]); $j++) { 
            $jumlahSks += $data[$i]["mataKuliah"][$j]["sks"];
        }
        $data[$i]["jumlahSks"] = $jumlahSks;
        if($data[$i]["jumlahSks"] < 7) {
            $data[$i]["ket"] = "Revisi KRS";
        } 
        else{
            $data[$i]["ket"] = "Tidak Revisi";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 403</title>
    <style>
        table{border-collapse : collapse; border : solid 1px; width : 650px; height : 150px; text-align : left;}
        tr, th, td{border-collapse : collapse; border : solid 1px; padding : 5px;}
        #red{background-color : red;}
        #green{background-color : green;}
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
            for ($i=0; $i < $n; $i++) { 
                for ($j=0; $j < count($data[$i]["mataKuliah"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$data[$i]["no"]."</td>";
                        echo "<td>".$data[$i]["nama"]."</td>";
                        echo "<td>".$data[$i]["mataKuliah"][$j]["mk"]."</td>";
                        echo "<td>".$data[$i]["mataKuliah"][$j]["sks"]."</td>";
                        echo "<td>".$data[$i]["jumlahSks"]."</td>";
                        if($data[$i]["ket"]=="Revisi KRS"){
                            echo "<td><label id='red'/>".$data[$i]["ket"]."</td>";                        
                        }
                        else{
                            echo "<td><label id='green'/>".$data[$i]["ket"]."</td>"; 
                        }
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$data[$i]["mataKuliah"][$j]["mk"]."</td>";
                        echo "<td>".$data[$i]["mataKuliah"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>