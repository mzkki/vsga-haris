<?php

include 'dbconn.php';

$id = $_POST['idAnggota'];
$nama = $_POST['namaAnggota'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenisKelamin'];
$status = $_POST['statusPinjam'];

if ($id != null) {
  $query = mysqli_query($conn, "update tb_anggota set nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', status='$status' where idanggota='$id'");
  header('location: anggota.php');
} else {
  echo "id tidak valid";
}
