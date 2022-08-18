<?php

include 'dbconn.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$stok = intval($_POST['stok']);

if ($id != null) {
  $query = mysqli_query($conn, "update tb_buku set judul='$judul', pengarang='$pengarang', stok='$stok' where idbuku='$id'");
  header('location: buku.php');
} else {
  echo "id tidak valid";
}
