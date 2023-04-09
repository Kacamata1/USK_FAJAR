<?php
require 'function.php';

$id = $_GET['id'];

if(hapusPesanan($id) > 0){
    echo "
        <script type='text/javascript'>
        alert('Pesanan Berhasil Dibatalkan!')
        window.location= 'dashboard.php'
        </script>
        ";
}else{
    echo "
        <script type='text/javascript'>
        alert('Yahh, Data Gagal di Hapus!')
        
        </script>
        ";
}