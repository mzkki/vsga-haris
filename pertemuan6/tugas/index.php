<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Biodata</title>
</head>

<body>
  <h1>Form Biodata</h1>
  <?php
  if (isset($_GET['nama'])) {
    if (isset($_GET['nama']) == 'kosong') {
      echo "<h4 style='color:red'> Nama Belum Diisi </h4>";
    }
  }
  ?>
</body>

</html>