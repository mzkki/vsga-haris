<?php

echo "<h2> Percobaan 1 </h2>";
$memory = memory_get_usage();
echo "Program menggunakan memory sebesar $memory<br>";

// percobaan 1

echo "<h2> Percobaan 2 </h2>";
$awal = microtime(true);
$i = 0;
while ($i < 1000) {
  $tmp[] = "";
  ++$i;
}

$akhir = microtime(true);
$waktu = $akhir - $awal;
echo "petik 2 memerlukan waktu selama $waktu detik <br>";

//menggunakan petik 2 ("")

$awal1 = microtime(true);
$j = 0;
while ($i < 1000) {
  $tmp1[] = '';
  ++$i;
}

$akhir1 = microtime(true);
$waktu1 = $akhir1 - $awal1;
echo "petik 1 memerlukan waktu selama $waktu1 detik <br>";

// menggunakan petik 1 ('')
// percobaan 2

echo "<h2> Percobaan 3 </h2>";
$begin = microtime(true);
$arrA = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
for ($i = 0; $i < count($arrA); $i++) {
  echo count($arrA);
}

$end = microtime(true);
$time = $end - $begin;
echo "test 1 memerlukan waktu selama $time detik <br>";

// tanpa membuat variable baru

$begin1 = microtime(true);
$arrA1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$len = count($arrA1);
for ($j = 0; $j < $len; $j++) {
  echo $len;
}

$end1 = microtime(true);
$time1 = $end1 - $begin1;
echo "test 2 memerlukan waktu selama $time1 detik <br>";

// dengan menggunakan variable baru
// EOF