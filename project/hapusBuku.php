<?php

include 'dbconn.php';

$idbuku = $_GET['idbuku'];

$data = mysqli_query($conn, "select idbuku from tb_buku where idbuku='$idbuku'");
$d = mysqli_fetch_array($data);

if ($d !== null) {
  mysqli_query($conn, "delete from tb_buku where idbuku='$idbuku'");

  header("location: buku.php");
} else {
  echo "Data tidak ditemukan <br>";
  echo 'Klik disini untuk <a href="buku.php">kembali </a><br>';
}
