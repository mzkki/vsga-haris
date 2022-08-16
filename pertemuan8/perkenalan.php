<?php
function perkenalan($nama = "Budi", $salam = "Selamat Datang")
{
  echo "$salam, Nama saya $nama, umur saya saat ini " . umur(2004) . " tahun<br>";
}

function umur($tahun_lahir)
{
  $umur = date('Y') - $tahun_lahir;
  return $umur;
}

perkenalan();
