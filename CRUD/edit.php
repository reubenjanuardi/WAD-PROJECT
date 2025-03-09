<?php
include 'includes/db.php';

if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $stmt = $pdo->prepare('UPDATE produk SET nama_produk = ?, deskripsi = ?, harga = ?, stok = ? WHERE id = ?');
    $stmt->execute([$nama_produk, $deskripsi, $harga, $stok, $id]);

    header('Location: index.php');
    exit;
}

$stmt = $pdo->prepare('SELECT * FROM produk WHERE id = ?');
$stmt->execute([$id]);
$produk = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="POST">
        <label for="nama_produk">Nama Produk:</label>
        <input type="text" name="nama_produk" id="nama_produk" value="<?= $produk['nama_produk'] ?>" required>
        <br>
        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" id="deskripsi"><?= $produk['deskripsi'] ?></textarea>
        <br>
        <label for="harga">Harga:</label>
        <input type="number" name="harga" id="harga" step="0.01" value="<?= $produk['harga'] ?>" required>
        <br>
        <label for="stok">Stok:</label>
        <input type="number" name="stok" id="stok" value="<?= $produk['stok'] ?>" required>
        <br>
        <button type="submit">Simpan</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>