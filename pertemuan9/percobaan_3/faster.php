<?php

$begin = microtime(true);
$arrA = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$len = count($arrA);
for ($i = 0; $i < $len; $i++) {
  echo $len;
}

$end = microtime(true);
$time = $end - $begin;
echo "test 2 memerlukan waktu selama $time detik <br>";
