<?php include 'layout/navbar.php'; ?>
<?php
$data = query("SELECT * FROM produk WHERE stok_produk > 0");
?>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
<div class="hero">
    <div class="hero-text">
        <?php if (isset($_SESSION["username"])) : ?>
            <h1 style="font-size:50px; font-family:'Tangerine', serif;">Halo <?= $_SESSION["name"]; ?></h1>
            <h4>- Selamat Datang di LaptopInAja -</h4>
        <?php endif; ?>
        <?php if (!isset($_SESSION["username"])) : ?>
            <h1 style="font-size: 50px;">LaptopInAja</h1>
            <h4>- Silahkan Login atau Daftar Terlebih Dahulu -</h4>
            </ul>
        <?php endif; ?>
    </div>
</div>

<div class="container">
    <div class="text-produk">
        <center><h2>Produk Tersedia</h2></center>
        <hr>
    </div>
    <div class="wrapper-produk">
        <?php foreach ($data as $produk) : ?>
            <div class="produk">
                <a href="detail.php?id=<?= $produk["id_produk"]; ?> ">
                    <img src="foto/<?= $produk["foto_produk"]; ?>">
                    <h2><?= $produk["nama_produk"]; ?></h2>
                    <p>Rp. <?= number_format($produk["harga_produk"]); ?></p>
                    <p>Tersisa : <?= $produk["stok_produk"]; ?></p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require "layout/footer.php"; ?>