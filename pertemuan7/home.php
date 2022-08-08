<?php
session_start();
if (isset($_SESSION['status'])) {
  if ($_SESSION['status'] != 'logged_in') {
    header("location:login.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>

<body>
  <script>
    alert("Selamat Datang, Kamu berhasil login");
  </script>

  <h1>Selamat Datang, <?= $_SESSION['nama'] ?></h1>

  <br>
  <a href="logout.php">Klik disini untuk logout</a>
</body>

</html>