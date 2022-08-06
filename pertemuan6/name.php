<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan php</title>
</head>

<body>
  <?php
  $nama = $_POST['nama'];

  if ($nama == '') {
    header('location:inputname.php?nama=kosong');
  } else {
    echo "<h1>Nama kamu adalah $nama</h1>";
  }

  ?>
  <a href="inputname.php">
    <button type="button">Kembali</button>
  </a>
</body>

</html>