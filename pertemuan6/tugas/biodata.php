<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Biodata kamuh</title>
</head>

<body>
  <?php
  $data = $_POST;
  if ($data['nama'] && $data['alamat'] && $data['ttl'] && $data['jenis_kelamin'] && $data['umur']) {
    echo "Nama kamu adalah " . $data['nama'] . "<br>";
    echo "Alamat kamu adalah " . $data['alamat'] . "<br>";
    echo "Tempat tanggal lahir kamu adalah " . $data['ttl'] . "<br>";
    echo "Jenis kelamin kamu adalah " . $data['jenis_kelamin'] . "<br>";
    echo "Umur kamu adalah " . $data['umur'] . "<br>";
  } else {
    header('location:index.php?data=kosong');
  }
  ?>
</body>

</html>