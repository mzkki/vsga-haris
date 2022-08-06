<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Php</title>
</head>

<body>
  <h1>Membuat form nama menggunakan php <br> ----</h1>

  <?php
  if (isset($_GET['nama'])) {
    if (isset($_GET['nama']) == 'kosong') {
      echo "<h4 style='color:red'> Nama Belum Diisi </h4>";
    }
  }
  ?>

  <h3>Inputkan nama kamu</h3>
  <form action="name.php" method="post">
    <label for="nama">Nama :</label>
    <input type="text" name="nama" placeholder="Nama kamu" id="nama">
    <br>
    <input type="submit" value="Kirim">
  </form>
</body>

</html>