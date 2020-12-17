<?php 
// pengulangan pada array
// for/ foreach
$angka = [1, 5, 3,2,15,20,11,77,89];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for($i=0; $i<count($angka); $i++) { ?>
    <div class="kotak"><?= $angka[$i] ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach( $angka as $angk ) { ?>
    <div class="kotak"><?= $angk ?></div>
    <?php } ?>

    <div class="clear"></div>
    
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
</body>

</html>