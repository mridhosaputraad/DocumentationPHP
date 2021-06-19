<?php
/*
Control Flow/Struktur Kendali

-> bagaimana alur dari program ketika dibaca oleh intepreter php. normalnya program dibaca php dari atas ke bawah dan dari kiri ke kanan. Dengan menggunakan control flow dapat mengatasi hal tsb.

-> Pengulangan
    > ketika mengerjakan blok program tanpa harus menulis ulang scriptnya.
    > Sintaks:
        - for
        - while
            itu selama kondisinya bernilai true lakukan apapun yang ada didalamnya
        - do.. while
            logikanya jalankan dulu baru cek kondisinya.
            ketika kondisinya bernilai false maka bloknya akan dijalankan dulu 1x.
        - foreach
        Catatan didalam misal for(inisialisasi, kondisiTerminasi, Increment/Decrement) ada 3 bagian;
        1. Inisialisasi, digunakan menentukan variabel awal untuk pengulangannya.
        2. kondisiTerminasi, digunakan untuk memberhentikan pengulangannya.
        3. Incremet/Decrement, supaya pengulangannya bisa maju/mundur

-> FYI
    > misal for( $i = 1 .. ) kalo pakai 1 gunakan <=, bila tidak maka pengulangannya 2x jadi for( Si = 1; $i <= 5) 
    > syarat menggunakan penulisan templating, gunakan (:) untuk mengganti buka kurawal dan gunakan (endfor/foreach/while;) untuk mengganti tutup kurawal
*/

// // Pengulangan
// // For
// for( $i = 0; $i < 5; $i++ ) {
//     echo "hello world! <br>";
// }

// // while
// $i = 0;
// while( $i < 5 ) {
//     echo "Hello World! <br>";
// $i++;
// }

// // do.. while
// $i = 10;
// do {
//     echo "hello world! <br>";
// $i++;
// } while( $i < 5 );

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

<table border="1" cellpadding="10" cellspacing="0">
    <!-- Membuat 3 baris dengan 5 kolom -->
    <?php 
        /*for( $i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++ ) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }*/
    ?>
    <!-- Atau dengan gaya penulisan template -->
    <?php for( $i = 1; $i <= 3; $i++ ) : ?>
        <tr>
            <?php for( $j = 1; $j <= 5; $j++ ) : ?>
                <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>
    
</body>
</html>