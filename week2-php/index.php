<!DOCTYPE html>
<html>
  <head>
    <title>Form Pendaftaran Mahasiswa</title>
  </head>
  <body>
    <h2>Form Pendaftaran Mahasiswa</h2>
    <form action="proses_get.php" method="GET">
      <label for="nama">Nama:</label>
      <input type="text" id="nama" name="nama" required /><br /><br />

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required /><br /><br />

      <input type="submit" value="Daftar" />
    </form>
  </body>
</html>
