<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $stmt = $pdo->prepare('INSERT INTO produk (nama_produk, deskripsi, harga, stok) VALUES (?, ?, ?, ?)');
    $stmt->execute([$nama_produk, $deskripsi, $harga, $stok]);

    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Tambah Produk</h1>
    <form method="POST">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi"></textarea>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" step="0.01" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>