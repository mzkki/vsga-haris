<?php

include 'dbconn.php';

$id = $_POST['idAnggota'];
$nama = $_POST['namaAnggota'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenisKelamin'];
$status = $_POST['statusPinjam'];

$unavailableId = mysqli_query($conn, "select idanggota from tb_anggota where idanggota='$id'");
$checkId = mysqli_num_rows($unavailableId);

if ($checkId) {
  echo "ID Anggota sudah ada<br>";
  echo 'Klik disini untuk <a href="tambahAnggota.php">kembali </a><br>';
} else {
  mysqli_query($conn, "insert into tb_anggota(idanggota, nama, jenis_kelamin, alamat, status) values ('$id', '$nama', '$jenis_kelamin', '$alamat', '$status')");
  header("location: anggota.php");
}
