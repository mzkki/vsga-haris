<?php

session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "project_vsga";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
