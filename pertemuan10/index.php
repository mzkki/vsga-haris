<?php

$nilai = 100;
if ($nilai >= 80 && $nilai <= 100) {
  $index = "A";
} elseif ($nilai > 100) {
  $index = "Nilai yang anda inputkan tidak valid";
} elseif ($nilai >= 70) {
  $index = "B";
} elseif ($nilai >= 50) {
  $index = "C";
} elseif ($nilai >= 30) {
  $index = "D";
} else {
  $index = "E";
}

echo "Nilai anda adalah : $nilai <br>";
echo "Dengan predikat nilai : $index";
