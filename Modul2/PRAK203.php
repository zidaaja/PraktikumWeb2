<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form actions="" method="post">
            Nilai : <input type="text" name="nilai"><br>
            Dari : <br>
            <input type="radio" id="c" name="dari" value="c">
            <label for="c">Celcius</label><br>
            <input type="radio" id="f" name="dari" value="f">
            <label for="f">Fahrenheit</label><br>
            <input type="radio" id="r" name="dari" value="r">
            <label for="r">Rheamur</label><br>
            <input type="radio" id="k" name="dari" value="kc">
            <label for="k">Kelvin</label><br>

            Ke : <br>
            <input type="radio" id="c" name="ke" value="c">
            <label for="c">Celcius</label><br>
            <input type="radio" id="f" name="ke" value="f">
            <label for="f">Fahrenheit</label><br>
            <input type="radio" id="r" name="ke" value="r">
            <label for="r">Rheamur</label><br>
            <input type="radio" id="k" name="ke" value="k">
            <label for="k">Kelvin</label><br>

            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php
            error_reporting(0);
            if(isset($_POST['submit'])){
                $nilai=$_POST['nilai'];
                $dari=$_POST['dari'];
                $ke=$_POST['ke'];
                
                if(($dari=='c') and ($ke=='c')){
                    echo "<h1>Hasil Konversi : $nilai &degC";
                } elseif(($dari=='c') and ($ke=='f')){
                    $hasil = ((9/5)*$nilai)+32;
                    echo "<h1>Hasil Konversi : $hasil &degF";
                } elseif(($dari=='c') and ($ke=='r')){
                    $hasil = (4/5)*$nilai;
                    echo "<h1>Hasil Konversi : $hasil &degR";
                } elseif(($dari=='c') and ($ke=='k')){
                    $hasil = $nilai+273;
                    echo "<h1>Hasil Konversi : $hasil &degK";
                } elseif(($dari=='f') and ($ke=='c')){
                    $hasil = (5/9)*($nilai-32);
                    echo "<h1>Hasil Konversi : $hasil &degC";
                } elseif(($dari=='f') and ($ke=='f')){
                    echo "<h1>Hasil Konversi : $nilai &degF";
                } elseif(($dari=='f') and ($ke=='r')){
                    $hasil = (4/9)*($nilai-32);
                    echo "<h1>Hasil Konversi : $hasil &degR";
                } elseif(($dari=='f') and ($ke=='k')){
                    $hasil = (5/9)*($nilai-32)+273;
                    echo "<h1>Hasil Konversi : $hasil &degK";
                } elseif(($dari=='r') and ($ke=='c')){
                    $hasil = (5/4)*$nilai;
                    echo "<h1>Hasil Konversi : $hasil &degC";
                } elseif(($dari=='r') and ($ke=='f')){
                    $hasil = (9/4)*($nilai+32);
                    echo "<h1>Hasil Konversi : $hasil &degF";
                } elseif(($dari=='r') and ($ke=='r')){
                    echo "<h1>Hasil Konversi : $nilai &degR";
                } elseif(($dari=='r') and ($ke=='k')){
                    $hasil = (5/4)*($nilai+273);
                    echo "<h1>Hasil Konversi : $hasil &degK";
                } elseif(($dari=='k') and ($ke=='c')){
                    $hasil = $nilai-273;
                    echo "<h1>Hasil Konversi : $hasil &degC";
                } elseif(($dari=='k') and ($ke=='f')){
                    $hasil = (9/5)*($nilai-273)+32;
                    echo "<h1>Hasil Konversi : $hasil &degF";
                } elseif(($dari=='k') and ($ke=='r')){
                    $hasil = (4/5)*($nilai-273);
                    echo "<h1>Hasil Konversi : $hasil &degR";
                } else{
                    echo "<h1>Hasil Konversi : $nilai &degK";
                }
            }
        ?>
    </body>
</html>