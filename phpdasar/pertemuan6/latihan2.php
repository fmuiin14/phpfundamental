<?php 
// $mahasiswa = [
// [
//     "Sandhika Galih",
//     "999999999999",
//     "sandhika@gmail.com",
//     "Teknik Informatika"
// ],
// [
// "Bambang",
// "1111111111111",
// "bambang@gmail.com",
// "Teknik Informatika"
// ]
// ];

// array assosiatif, variabel yg bisa memiliki banyak nilai, pasangan key dan value, key nya STRING yg kita buat sendiri
$mahasiswa = [[
    "nama" => "Fathul Muiin",
    "nrp" => "0110214022",
    "email" => "fmuiin14@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "goku.png"
],
[
    "nama" => "Sandhika Galih",
    "nrp" => "222222222",
    "email" => "sandhika@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "pevita.jpg"
]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li><img src="img/<?= $mhs['gambar'] ?>" alt=""> </li>
        <li>Nama : <?= $mhs['nama'] ?></li>
        <li>NRP : <?= $mhs['nrp'] ?></li>
        <li>Jurusan : <?= $mhs['jurusan'] ?></li>
        <li>Email : <?= $mhs['email'] ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>