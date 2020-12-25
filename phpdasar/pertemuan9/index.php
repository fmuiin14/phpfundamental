<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $no = 1;
        foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $no ?></td>
            <td><a href="">Ubah</a> | <a href="">Hapus</a></td>
            <td><img src="img/<?= $row['gambar'] ?>" width="50" height="50" alt=""></td>
            <td><?= $row['nrp'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jurusan'] ?></td>
        </tr>
        <?php $no++ ?>
        <?php endforeach; ?>

    </table>
    
</body>
</html>