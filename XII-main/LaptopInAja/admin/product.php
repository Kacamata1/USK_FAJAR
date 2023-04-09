<?php
session_start();
require 'function.php';
if (!isset($_SESSION["username"])) {
    echo "
        <script type='text/javascript'>
            alert('Mohon maaf, anda belum login!')
            window.location = '../login/index.php';
        </script>";
}
if ($_SESSION['roles'] != "Admin") {
    echo "
    <script type='text/javascript'>
        alert('anda bukan admin')
        window.location = '../login/index.php';
    </script>";
}

$produk = query("SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/style6.css">
</head>

<body>
    <?php include '../layout/sidebar.php' ?>
    <div class="main">
        <center><h2 class="judul">Data Produk</h2></center>
        <hr><br>
        <center><a href="tambah_produk.php" class="tambah">Tambah (+)</a></center>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga (Rp)</th>
                <th>Deskripsi</th>
                <th>Foto</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk as $data) : ?>
                <tr>

                    <td><?= $i; ?></td>
                    <td><?= $data["nama_produk"]; ?></td>
                    <td><?= number_format($data["harga_produk"]); ?></td>
                    <td><?= $data["deskripsi_produk"]; ?></td>
                    <td><img src="../foto/<?= $data["foto_produk"] ?>" width="100px" alt="" </td>
                    <td><?= $data["stok_produk"]; ?></td>
                    <td>
                        <a href="edit_produk.php?id=<?= $data["id_produk"]; ?>" onclick="return confirm('Apakah Anda yakin ingin edit data ini?')" class="edit">Edit</a>

                        <a href="delete_produk.php?id=<?= $data["id_produk"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus?')" class="hapus">Hapus</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>