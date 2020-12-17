<?php

// 1 harus definisikan fungsi terlebih dahulu
function salam($waktu, $nama) {
    return "Selamat $waktu $nama";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Function</title>
</head>
<body>

    <h1><?= salam('Siang', 'Miuun') ?></h1>
    
</body>
</html>