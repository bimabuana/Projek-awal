<?php
$tugas1 = 90;
$tugas2 = 80;
$jumlah = $tugas1 + $tugas2;
$rerata = $jumlah / 2;

# Menggabungkan nilai string dari tugas1 dan tugas2 #
$gabungan_string = $tugas1 . $tugas2;

echo "Nilai Tugas I: " . $tugas1 . "<br>";
echo "Nilai Tugas II: " . $tugas2 . "<br>";
echo "Jumlah Tugas: " . $jumlah . "<br>";
echo "Rerata Tugas: " . $rerata . "<br>";

# Menampilkan nilai gabungan string #
echo "Gabungan String: " . $gabungan_string;
?>