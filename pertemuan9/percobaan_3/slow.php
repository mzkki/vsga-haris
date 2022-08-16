<?php

$begin = microtime(true);
$arrA = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
for ($i = 0; $i < count($arrA); $i++) {
  echo count($arrA);
}

$end = microtime(true);
$time = $end - $begin;
echo "test 1 memerlukan waktu selama $time detik <br>";
