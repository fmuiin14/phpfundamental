<?php

$mahasiswa = [
    ["Fathul Muiin", "0110214022", "Teknik Informatika", "fmuiin14@gmail.com"],
    ["Sandhika Galih", "123456789", "Teknik Informatika", "sandhika@gmail.com"],
    ["Muhammad Izul", "9999999999", "Teknik Informatika", "izul@gmail.com"]
]

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

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li><?= $mhs[0] ?></li>
        <li><?= $mhs[1] ?></li>
        <li><?= $mhs[2] ?></li>
        <li><?= $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>

</body>

</html>