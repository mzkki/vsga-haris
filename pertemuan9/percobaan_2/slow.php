<?php

$awal = microtime(true);
$i = 0;
while ($i < 1000) {
  $tmp[] = "";
  ++$i;
}

$akhir = microtime(true);
$waktu = $akhir - $awal;
echo "petik 2 memerlukan waktu selama $waktu detik <br>";
