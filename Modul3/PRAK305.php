<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='POST'>
        <input type='text' name='teks'></input>
        <input type="submit" value="Submit" name="submit">
    </form>

    <?php
        if (isset($_POST['submit'])) {
            $teks = $_POST['teks'];

            echo "<h2>Input: </h2>";
            echo $teks;
            echo "<br><h2>Output: </h2><br>";

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $i = 0;
                if (isset($_POST['teks'])) {
                    $teks = $_POST['teks'];
                    $teksArray = str_split($teks);;
                    $bykHuruf = count($teksArray);

                    while ($i < $bykHuruf) {
                    $bykPerhuruf = 1;
                    while ($bykPerhuruf <= $bykHuruf) {
                        if ($bykPerhuruf == 1)
                            echo strtoupper($teksArray[$i]);

                        else {
                            echo strtolower($teksArray[$i]);
                        }
                        $bykPerhuruf++;
                    } $i++;
                    }
                }
            }
        }
    ?>
</body>
</html>