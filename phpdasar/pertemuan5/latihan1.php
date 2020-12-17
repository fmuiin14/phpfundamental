<?php
// arrray, variabel yg bisa memiliki banyak nilai
// cara lama
$nama_hari = array(
    "senin", "selasa", "rabu"
);

// cara baru
$nama_nya = ["Januari", "Februari"];

// menampilkan array, var_dump() lengkap atau print_r() lebih sederhana

// var_dump($nama_hari);

$nama_hari[] = "Kamis";

var_dump($nama_hari);


?>