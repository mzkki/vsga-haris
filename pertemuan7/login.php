<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
$cek = mysqli_num_rows($result);

if ($cek > 0) {
  $data = mysqli_fetch_assoc($result);
  $_SESSION['username'] = $username;
  $_SESSION['nama'] = $data['nama'];
  $_SESSION['status'] = "logged_in";
  $_SESSION['id'] = $data['id'];
  header("location:home.php");
} else {
  header("location:index.php?pesan=loginfailed");
}
