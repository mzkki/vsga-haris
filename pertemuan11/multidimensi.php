<?php

$books = [
  [
    "judul" => "Belajar fundamental pengembangan website",
    "penerbit" => "Gramedia",
  ],
  [
    "judul" => "Belajar Dasar pengembangan website",
    "penerbit" => "Gramedia",
  ],
  [
    "judul" => "Belajar materi profesional pengembangan website",
    "penerbit" => "Gramedia",
  ],
];

foreach ($books as $book) {
  echo "<h4>" . $book['judul'] . "</h4>";
  echo "<p>" . $book['penerbit'] . "</p>";
  echo "<hr>";
}
