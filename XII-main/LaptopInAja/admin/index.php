<?php
session_start();
require 'function.php';
if(!isset($_SESSION["username"])){
    echo "
        <script type='text/javascript'>
            alert('Mohon maaf, anda belum login!')
            window.location = '../login/index.php';
        </script>";        
}
if($_SESSION['roles'] !="Admin"){
    echo "
    <script type='text/javascript'>
        alert('anda bukan admin')
        window.location = '../login/index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="../style/style6.css">
</head>
<body>  
    <?php include '../layout/sidebar.php' ?>
    <div class="main">
        <center><h2 class="judul">Selamat Datang, <?= $_SESSION['name']; ?></h2><hr></center>
        <center><p style="font-weight:bolder;font-family:Segoe UI;margin-top:120px;">INI ADALAH HALAMAN ADMIN</p><hr></center>
        <center><p style="font-family:Segoe UI;margin-top:150px;">Anda Login sebagai <?= $_SESSION['roles']; ?></p><hr></center>
    </div>
</body>
</html>