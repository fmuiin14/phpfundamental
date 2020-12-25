<?php
// konek ke db
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);
if (!$result) {
    echo mysqli_error($conn);
}

// ambil data mahasiswa dr objek result (fetch)
/* Ada 4 cara
mysqli_fetch_row() //mengembalikan array numeric
mysqli_fetch_assoc() //mengembalikan array assosiatif
mysqli_fetch_array() //ambil array assosiatif dan numeric
mysqli_fetch_object()
*/

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs);
// while ($mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
// }
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs); //mengembalikan value berdasarkan objek, manggilnya ->
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);
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
        while ($row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>

    </table>
    
</body>
</html>