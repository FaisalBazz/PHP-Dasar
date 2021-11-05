<?php 

echo 'Nama : ';
echo 'M Faisal Basri';
echo "\n";

echo "Nama : ";
echo "M\tFaisal\t Basri \n";


// Heredoc
echo <<<TEXT
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc \n
TEXT;

echo <<<'NOWDOC'
Ini adalah contoh string yang sangat
panjang, dan tidak perlu mengetik ENTER secara
manual, dan bisa digunakan untuk "quote"
NOWDOC;

