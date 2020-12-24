<?php 
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
        <a href="latihan2.php?nama=<?= $mhs['nama'] ?>&nrp=<?= $mhs['nrp'] ?>&email=<?= $mhs['email'] ?>&jurusan=<?= $mhs['jurusan'] ?>&gambar=<?= $mhs['gambar'] ?>"><?= $mhs['nama'] ?></a>
    </ul>
    <?php endforeach; ?>

</body>

</html>