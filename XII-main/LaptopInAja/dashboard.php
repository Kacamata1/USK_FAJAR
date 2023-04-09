<?php include 'layout/navbar.php'; ?>
<?php $proses = query("SELECT * FROM transaksi WHERE name = '{$_SESSION['name']}' and status='proses'"); ?>
<?php $verif = query("SELECT * FROM transaksi WHERE name = '{$_SESSION['name']}' and status='dikirim'"); ?>
<?php $tolak = query("SELECT * FROM transaksi WHERE name = '{$_SESSION['name']}' and status='ditolak'"); ?>
<?php if (!isset($_SESSION["username"])) :
    echo "<script>
            alert('Anda belum login, silahkan login dulu!');
            window.location = 'login/index.php';
            </script>";
endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Customer</title>
    <link rel="stylesheet" href="style/style5.css">
</head>

<body>
    <div class="container">
        <div class="informasi">
        <center><h2>Selamat Datang <?= $_SESSION["name"]; ?>, Ini Adalah List Riwayat Belanjaan Kamu</h2><br></center>
        </div>
        <div class="data-transaksi">
        <table class="table table-striped"> 
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($proses as $data) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data["name"]; ?></td>
                        <td><?= $data["nama_produk"]; ?></td>
                        <td><?= number_format($data["harga_produk"]); ?></td>
                        <td><?= $data["alamat"]; ?></td>
                        <td><img src="foto/<?= $data['foto_produk']; ?>" width="100px" alt=""></td>
                        <td><?= $data["status"]; ?></td>
                        <td>
                            <a href="hapusPesanan.php?id=<?= $data["id_transaksi"]; ?>" onclick="return confirm('Apakah Anda yakin ingin membatalkan pesanan?')" class="delete">Cancel Pesanan</a>
                            <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="detail">Detail →</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="data-transaksi">
    <table class="table table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Alamat</th>
                    <th>Foto</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($verif as $data) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data["name"]; ?></td>
                        <td><?= $data["nama_produk"]; ?></td>
                        <td><?= number_format($data["harga_produk"]); ?></td>
                        <td><?= $data["alamat"]; ?></td>
                        <td><img src="foto/<?= $data['foto_produk']; ?>" width="100px" alt=""></td>
                        <td><?= $data["status"]; ?></td>
                        <td>
                            <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="detail">Detail →</a>
                        </td>
                    <?php $i++; ?>
                <?php endforeach; ?>

                <?php foreach ($tolak as $data) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $data["name"]; ?></td>
                        <td><?= $data["nama_produk"]; ?></td>
                        <td><?= number_format($data["harga_produk"]); ?></td>
                        <td><?= $data["alamat"]; ?></td>
                        <td><img src="foto/<?= $data['foto_produk']; ?>" width="100px" alt=""></td>
                        <td><?= $data["status"]; ?></td>
                        <td>
                            <a href="detail_transaksi.php?id=<?= $data["id_transaksi"]; ?>" class="detail">Detail →</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</body>

</html>