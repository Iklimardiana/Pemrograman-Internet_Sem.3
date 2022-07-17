<?php
session_start();

require 'koneksi.php';
    if( isset($_POST["login"]) ){
        $username =$_POST["username"];
        $password =$_POST["password"];
        $result=mysqli_query($conn, "SELECT * FROM user WHERE 
        username = '$username'");
        //cek username
        if( mysqli_num_rows($result) === 1){
            //cek password
            $row =mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                //set session
                $_SESSION["login"] = true;
                
                header("location: update.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Pegawai</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div class="background">
        <h2 style="text-align: center; color:#dfc78a;">Halaman Login Pegawai</h2>
        <?php if( isset($error) ) : ?>
            <p style="color: red; font-style: italic;">Username/ password salah</p>
            <?php endif; ?>
        <form action="" method="post">
            <label style="font-weight:bold; color: #dfc78a;" for="username">Username :</label><br>
            <input id="box" type="text" name="username" id="username" placeholder="Masukan username"><br>
            <label style="font-weight:bold; color: #dfc78a;" for="password">Password :</label><br>
            <input id="box" type="password" name="password" id="password" placeholder="Masukan password"><br>
            <button class="login" type="submit" name="login">Login</button><br>
        </form>
    </div>
    </div>
</body>
</html>