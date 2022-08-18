<?php

include 'dbconn.php';

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$stok = intval($_POST['stok']);

$query = "insert into tb_buku(judul, pengarang, stok) values ('$judul', '$pengarang', '$stok')";
mysqli_query($conn, $query);

header("location: buku.php");
