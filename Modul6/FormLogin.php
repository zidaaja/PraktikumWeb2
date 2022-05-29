<?php
    session_start();
    include 'Koneksi.php';
    if (isset($_SESSION['nomor_member'])) {
        header("Location: HalamanUtama.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        table,th,td{border-collapse: collapse; padding:5px; background-color: white; text-align: center;}
        table{width: 30%;}
        button{align: right;}
        h1{font-family: arial; font-size:35px; background-color: lightgrey; text-align: center}
        body{background-color: lightblue;}
        button{background-color: yellow; font-family: arial; font-style: bold;}
    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="Login.php" method="post">
        <table>
            <tr>
                <td>Nomor Member</td>
            </tr>
            <tr>
                <td><input type="text" name="nomor_member" id="nomor_member" required></td>
            </tr>
            <tr>
                <td>Password</td>
            </tr>
            <tr>
                <td><input type="password" name="password" id="password" required></td>
            </tr>
            <tr>
                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </table>
    </form>
</body>
</html>