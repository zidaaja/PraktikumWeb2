<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <form actions="" method="post">
            Nama : 1 <input type="text" name="nama1"> <br>
            Nama : 2 <input type="text" name="nama2"> <br>
            Nama : 3 <input type="text" name="nama3"> <br>
            <input type="submit" name="urutkan" value="Urutkan">
        </form>

        <?php
            if(isset($_POST['urutkan'])){
                $nama1=$_POST['nama1'];
                $nama2=$_POST['nama2'];
                $nama3=$_POST['nama3'];

                $Array = array($nama1, $nama2, $nama3);
                $n = strlen($nama1);
                
                if(($nama1<$nama2) and ($nama1<$nama2) and ($nama2<$nama3)){
                    for($i=0; $i<$n; $i++){
                        echo $Array[$i]."</br>";
                    }
                } elseif (($nama1<$nama2) and ($nama1<$nama2) and ($nama2>$nama3)){
                    echo $nama1;
                    echo "<br>";
                    echo $nama3;
                    echo "<br>";
                    echo $nama2;
                } elseif (($nama2<$nama1) and ($nama2<$nama3) and ($nama1>$nama3)){
                    echo $nama2;
                    echo "<br>";
                    echo $nama3;
                    echo "<br>";
                    echo $nama1;
                } elseif (($nama2<$nama1) and ($nama2<$nama3) and ($nama1<$nama3)){
                    echo $nama2;
                    echo "<br>";
                    echo $nama1;
                    echo "<br>";
                    echo $nama3;
                }  elseif (($nama3<$nama1) and ($nama3<$nama2) and ($nama1<$nama2)){
                    echo $nama3;
                    echo "<br>";
                    echo $nama1;
                    echo "<br>";
                    echo $nama2;
                } elseif (($nama3<$nama1) and ($nama3<$nama2) and ($nama1>$nama2)){
                    for($i=$n; $i>=0; $i--){
                        echo $Array[$i]."</br>";
                    }
                }
            }
        ?>
    </body>
</html>
