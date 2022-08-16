<?php

include 'dbconn.php';

$idAnggota = $_GET['idanggota'];

$data = mysqli_query($conn, "select idanggota from tb_anggota where idanggota='$idAnggota'");
$d = mysqli_fetch_array($data);

if ($d !== null) {
  mysqli_query($conn, "delete from tb_anggota where idanggota='$idAnggota'");

  header("location: anggota.php");
} else {
  echo "Data tidak ditemukan <br>";
  echo 'Klik disini untuk <a href="anggota.php">kembali </a><br>';
}
