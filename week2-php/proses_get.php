<!DOCTYPE html>
<html>
<head>
    <title>Proses Pendaftaran</title>
</head>
<body>
    <h2>Hasil Pendaftaran</h2>

    <?php
    if (isset($_GET['nama']) && isset($_GET['email']) && isset($_GET['password'])) {
        $nama = htmlspecialchars($_GET['nama']);
        $email = htmlspecialchars($_GET['email']);
        
        echo "<p>Terima kasih, <strong>$nama</strong>. Anda telah berhasil mendaftar dengan email <strong>$email</strong>.</p>";
    } else {
        echo "<p>Data tidak lengkap!</p>";
    }
    ?>

    <a href="index.php">Kembali ke Form</a>
</body>
</html>
