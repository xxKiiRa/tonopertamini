<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $bensin = $_POST['bensin'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $total = $jumlah * $harga;
    
    date_default_timezone_set('Asia/Jakarta'); 
    $waktu = date('Y-m-d H:i:s');

    $data = "$nama|$bensin|$jumlah|$harga|$total|$waktu\n";

    file_put_contents('transaksi.txt', $data, FILE_APPEND);

    header('Location: home.html');
    exit();
}
?>
