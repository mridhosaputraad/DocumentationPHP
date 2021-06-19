<?php
/*
Associativve Array

-> definisinya sama seperti array numerik, kecuali
-> keynya adalah string yang kita buat sendiri 


FYI
-> Array Multidimensional terdapat 2 index
    > index yang pertama, untuk menentukan element di array yang luarnya
    > index yang kedua, untuk menentukan element di array yang dalamnya
*/

// Latihan array multidimensional
$angka = [[1,3,2],[15,20,11],[77,89,8]];
// /* Kasusnya mencetak angka 20 terlebih dahulu */
// echo $angka[1][1];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;

        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <div class="clear"></div>
    <?php foreach( $angka as $a) : ?>
        <?php foreach( $a as $b ) : ?>
        <div class="kotak"><?= $b; ?></div>
        <?php endforeach;?>
        <!-- Membersihkan Float -->
        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>