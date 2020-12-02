<?php
//ini adalah komentar
//ini juga komentar
/* ini komentar
Ini juga komentar */

// Pertemuan 2 PHP Dasar
// Sintaks PHP
// Standar Output
// echo, print, 
// print_r() : mencetak array
// var_dump() : mencetak isi variabel

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

/*
variabel dan tipe data
variabel tidak boleh diawali dengan angka, tp boleh mengandung angka
interpolasi "" lebih canggih daripada ''
$nama = "Muiin";

Operator
aritmatika
+ - * / %
$x = 10;
$y = 20;

echo $x * $y;

penggabung string (concat)
.
$namadepan = "Fathul";
$namabelakang = "Muiin";
echo $namadepan . " " . $namabelakang;

assigment
= += -= *= /= %= .=

Perbandingan
< > <= >= == !=

identitas
=== !==

Logika
&& || !
*/


echo "Fathul Muiin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>halo, Selamat Datang <?= "Muiin" ?></h1>
    <?= "<h2> Halo lewat PHP </h2>" ?>
</body>
</html>