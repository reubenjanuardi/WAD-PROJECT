<?php
include 'includes/db.php';

$stmt = $pdo->query('SELECT * FROM produk');
$produk = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Daftar Produk</h1>
    <a href="create.php">Tambah Produk</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nama_produk'] ?></td>
                <td><?= $p['deskripsi'] ?></td>
                <td><?= $p['harga'] ?></td>
                <td><?= $p['stok'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $p['id'] ?>">Edit</a>
                    <a href="show.php?id=<?= $p['id'] ?>">|</a>
                    <a href="delete.php?id=<?= $p['id'] ?>" onclick="return confirm('Yakin ingin menghapus?')"> Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>