<?php 

// menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");
//l hari ini, d tanggal, M bulan. d-M-Y

// time
// EPOCH time/ UNIX, detik sejak 1 Januari 1970
// echo time();

// tampilkan hari 2 hari setelah hari ini
// echo date("l", time()+60*60*24*2);

// lahir hari apa
// mktime, membuat sendiri detik
// mktime(0,0,0,0,0,0);
// jam menit detik bulan tanggal tahun
// cek ultah hari apa
// echo date("l", mktime(0,0,0,4,8,1996));

// strtotime, dr menit ke detik
echo date("l", strtotime("8 april 1996"));


?>