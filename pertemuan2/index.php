<?php 
/* Dasar PHP

-> Standar Output 
    > perintah di php yang digunakan untuk menampilkan/mencetak sesuatu ke layar.
    > sintaks:
        - echo, print = biasanya digunakan untuk mencetak tulisan, isi variabel, dsb..
        - print_r = khusus digunakan untuk mencetak isi array
        - var_dump = biasanya digunakan untuk melihat isi dari variabel, nanti akan tampil informasi mengenai variabel tsb. Perintah ini akan memberikan informasi tidak hanya apa yang ditampilkan saja. Tapi, perintah ini juga akan memberi informasi yang ditampilkan itu tipe datanya apa, lalu ukurannya berapa
        catatan:
        print_r dan var_dump ini biasanya dipakai untuk dibagi jadi pada saat ingin menambah atau mencari keberadaan kesalahan program atau mencari tahudari isi suatu variabel karena ada informasi tambahan yang disajikan. Kedua perintah tsb bukan dipakai untuk membuat website melainkan hanya digunakan pada saat tahap development
*/

    echo "Muhammad Ridho";
    echo 123;
    echo true; 
    echo false;
    print "Muhammad Ridho";
    print_r("Muhammad Ridho");
    var_dump ("Muhammad Ridho");

/*
-> PENULISAN SINTAKS PHP
    > 1. PHP di dalam HTML
            - ada 2 tag php di dalam html tidak masalah
    > 2. HTML di dalam PHP
            - (tidak disarankan). karena untuk memisahkan HTML biarkan HTML. Begitupun PHP demikian. Walaupun nantinya akan banyak buka tutup tag PHP di dalam PHP ini tidak masalah.

-> Variabel dan Tipe Data
    > Variabel
        - di dalam PHP untuk membuat variabel cukup menuliskan: $namaVariabel
        - aturan pembuatan variabel:
            1. tidak boleh diawali dengan angka, tapi boleh mengandung angka

-> FYI
    1. Di PHP kutip (") lebih sakti daripada kutip ('), karena dengan menggunakan (") bisa menggunakan sebuah konsep yang namanya INTERPOLASI.
    2. INTERPOLASI itu adalah untuk mengecek apakah di dalam (")/string apakah terdapat atau tidak. Bila ada variabel di dalam ("), maka yang ditampilkan adalah isi variabelnya. Bila (') INTERPOLASInya tidak jalan!. 
*/

$nama = "Ridho";
$nama1 = "Muhammad Ridho";

    // echo "Halo, nama saya $nama1";
    echo 'Halo, nama saya $nama1';

/*
-> Operator
    1. Aritmatika
         + - * / %
    2. Penggabung String / concatenation / concat
         .
    3. Assignment
         artinya operator penugasan
         =, +=, -=, *=, /=, %=, .=
    4. Perbandingan
         biasanya digunakan pada saat pengkondisian
         <, >, <=, >=, ==, !=
    5. Identitas
         biasanya digunakan untuk mengecek tipe data dan mengecek nilainya juga
         ===, !==
    6. Logika
         biasanya dipakai untuk pengkondisian
         and(&&), or(||), not(!)
         catatan:
         jika menggunakan &&, dua pengkondisan harus bernilai true
         Jika menggunakan ||, cukup salah satu dari dua pengkondisian yang bernilai true
*/

// ARITMATIKA
$x = 10;
$y = 20;

    echo $x + $y;

// Penggabung String
$nama_depan = "Muhammad";
$nama_belakang = "Ridho";

    echo $nama_depan . " " . $nama_belakang;

// Assignment
$x = 1;
$x -= 5;

    echo $x;

$nama2 = "Muhammad";
$nama2 .= " ";
$nama2 .= "Ridho";

    echo $nama2;

// Perbandingan
var_dump(1 == 5);
var_dump(1 == "1"); // Karena operator perbandingan ini tidak mengecek tipe datanya. Hanya mengecek nilainya

// Identitas
var_dump(1 === "1"); // Karena meskipun nilainya sama tapi tipe datanya berbeda

// Logika
// Apakah x adalah bilangan genap
$x = 10;
var_dump($x < 20 &&  $x % 2 == 0); // dua pengkondisian harus bernilai true bila menggunakan pengkondisian logika

$x = 30;
var_dump($x < 20 && $x % 2 == 0);

$x = 30;
var_dump($x < 20 || $x % 2 == 0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
<!-- 1. PHP Di Dalam HTML -->
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>

<!-- 2. HTML Di Dalam  PHP -->
    <?php 
        echo "<h1>Halo, Selamat Datang Muhammad</h1>"
    ?>
</body>
</html>