<?php
require 'function.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style/index1.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-navbar">
    <div class="navbar">
        <div class="nav-logo">
            <a>LaptopInAja</a>
        </div>
        <div class="nav-links">
            <ul>
                <li class="nav-active">
                    <a href="index.php"><i class="fa-solid fa-house me-2"></i>Home</a></a>
                </li>
                <li class="nav-active">
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping me-2"></i>Keranjang</a>
                </li>
                <li class="nav-active">
                    <a href="dashboard.php"><i class="fa-solid fa-house-laptop me-2"></i>Dashboard</a>
                </li>
                <?php if(isset($_SESSION["username"])): ?>
                    <li>
                    <a href="logout.php" class="logout-btn">Logout</a>
                </li>
                <p class="nama"><?php echo $_SESSION["name"]; ?> 👤</p>
                <?php endif; ?>
                <?php if (!isset($_SESSION["username"])) : ?>
                    <li class="nav-active"><a href="login/index.php"><i class="fa-solid fa-arrow-right-to-bracket me-2"></i>Masuk</a></li>
                    <li class="nav-active"><a href="register/index.php"><i class="fa-solid fa-arrow-right-to-bracket me-2"></i>Daftar</a></li>
                </ul>
                <?php endif; ?>
            </div>
    </div>
</nav>
</body>
</html>