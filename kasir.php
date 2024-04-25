<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil transaksi</title>
    <link rel="stylesheet" href="kasir.css">
</head>
<body>
<?php
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $total = $harga * $jumlah;
    
      
    echo "<div>"; 
    echo "<h2>Transaksi Berhasil !</h2>"; 
    echo "<p>Barang: $barang</p>";
    echo "<p>Jumlah: $jumlah</p>";
    echo "<p>Total: $total</p>";
    echo "<br>";
    echo "<p>Pesan :</p>";
    echo "<br>";
    echo "<p>Terima kasih sudah berbelanja</p>";
    echo "<p>di Toko Adit jangan lupa datang kembali sayang :b</p>";
    echo "<br>";
    echo "<br>";
    echo "<a href=kasir.html><button>kembali</button></a>";
    echo "</div>";

?>
</body>
</html>
<?php