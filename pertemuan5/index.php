<?php
/* Array

-> sebuah variabel yang bisa menampung lebih dari satu nilai.
-> element pada array boleh memiliki tipe data yang berbeda.
-> pasangan antara key dan value. key-nya adalah index, yang dimulai dari 0
-> untuk user menggunakan pengulangan pada array

FYI

-> count(), fungsi ini untuk menghitung jumlah elemen yang ada didalam array secara otomatis.
-> foreach(), untuk setiap element yang ada didalam array lakukan sesuatu.
-> array numerik, array yang indeksnya angka
-> array asosiatif, array yang indeksnya string
*/

// Membuat Array
// > cara lama
    $hari = array("Senin", "Selasa", "Rabu");

// > Cara Baru
    $bulan = ["Januari", "Februari", "Maret"];
    $arr1 = [123, "tulisan", false];


// Menampilkan array
// > var_dump()
        var_dump($hari);
        echo "<br>";

// > print_r()
        print_r($bulan);
        echo "<br>";

// > Menampilkan 1 elemen pada array
        echo $arr1[0];
        echo "<br>";
        echo $bulan[1];
        echo "<br>";


// Menambah elemen baru pada array
    // $hari = array("Senin", "Selasa", "Rabu");
    // $bulan = ["Januari", "Februari", "Maret"];
    // $arr1 = [123, "tulisan", false];
    //     var_dump($hari);
    //     $hari[] = "Kamis";
    //     $hari[] = "Jum'at";
    //         echo "<br>";
    //     var_dump($hari);

// Latihan
// Pengulangan pada array
// > for / foreach
$angka = [3,2,15,20,11,77,89,8];
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
    <?php for( $i = 0; $i < count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach( $angka as $a) { ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php } ?>

    <!-- Perbaiki dengan gaya penulisan templating -->
    <div class="clear"></div>
    <?php foreach( $angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>