<?php
/*
Control Flow

-> Pengkondisian
    > atau disebut juga percabangan digunakan untuk menentukan apa yang akan terjadi ketika membuat sebuah pernyataan. Jika pernyataan tsb bernilai true, apa yang akan terjadi?. Dan ketika pernyataan tsb bernilai false, apa yang akan terjadi?.
    > Sintaks:
        - if.. else
        - if.. else if.. else
        - ternary   // operator untuk menggantikan if dan else sederhana
        - switch    // digunakan ketika sudah memiliki if else yang banyak

*/

// Pengkondisian
// if.. else
// $x = 30;
// if( $x < 20 ) {
//     echo "benar";
// } else {
//     echo "salah";
// }

// if.. else if.. else
// Bila ingin menyisipkan sebuah kondisi baru diantara kedua kondisi seperti diatas
// $x = 20;
// if( $x < 20 ) {
//     echo "benar";
// } else if( $x == 20 ) {
//     echo "bingo";
// } else {
//     echo "salah";
// }
?>
<!-- Latihan: Menerapkan konsep pengkondisian untuk membuat warna yang berbeda untuk baris yang genap dan ganjil pada tabel -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
    <!-- Langkah1: Lakukan Pengecekan -->
        <?php if( $i % 2 == 1 ) :?>
            <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif; ?>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
    
</body>
</html>