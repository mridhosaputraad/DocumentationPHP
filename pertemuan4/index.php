<?php
/* Function

-> Potongan program/baris-baris kode yang bisa diberi nama dan dipanggil berulang-ulang. 
-> Didalam php ada 2 jenis function;
   1. Built-in Function
      > Date/Time
        - time()
          > didalam time ada yang disebut UNIX Timestamp/EPOCH Time yaitu detik yang sudah berlalu sejak 1 januari 1970. mudahnya waktu untuk komputer
        - date(), formatnya sebagai berikut
          > date("l") --- tampilkan hari
          > date("d") --- tampilkan tanggal
          > date("M") --- tampilkan bulan
          > date("m") --- tampilkan bulan dalam bentuk angka
          > date("Y") --- tampilkan tahun
        - mktime()
          > membuat detik yang sudah berlalu
          > parameternya ada 6, mktime(0(jam),0(menit),0(detik),0(bulan),0(tanggal),0(tahun))
        - strtotime()
   2. User-Defined Function
      > Yang harus diperhatikan ketika membuat konsep ini;
        1. fungsiny harus didefinisikan terlebih dahulu
        2. 

-> FYI
    > Ada beberapa function yang sering dipakai, yakni:
      1. string
         - strlen() --- untuk menghitung panjang sebuah string
         - strcmp() --- untuk membandingkan dua buah string
         - explode() --- untuk memecah sebuah string menjadi array
         - htmlspecialchars() --- untuk menjaga web dari serangan
      2. utility/ fungsi bantuan
         - var_dump() --- untuk mencetak isi dari sebuah variabel, array, object
         - isset() --- untuk mengecek apakah sebuah variabel sudah pernah dibuat atau belum yang akan menghasilkan nilai boolean
         - empty() --- untuk mengecek apakah variabel yang ada itu terdapat isinya atau tidak
         - die() --- untuk memberhentikan program
         - sleep() --- untuk memberhentikan program sementara
*/
// 1. Built-in Function
// - date
    // echo date("l, d-M-Y");

// - time
    // echo time();
// Contoh kasus
    // Cara menghitung waktu detik
    // detik(60)*menit(60)*sehari(24)*jumlahhari(2)
    // echo date("d M Y", time()+60*60*24*100); /*menghitung hari yang akan datang*/
    // echo date("d M Y", time()-60*60*24*100); /*Menghitung hari yang sudah berlalu*/

// - mktime
// Contoh kasus: mencari tahu hari lahir
    // echo date("l", mktime(0,0,0,10,29,2000));

// - strtotime
    // echo date("l", strtotime("29 Oct 2000"));


// 2. User-defined Function
// Contoh kasus: membuat fungsi selamat datang ke user web
/* Langkah1: definisikan function */
function salam($waktu, $nama) {
    /* Langkah2: return */
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <!-- Langkah3: Masukkan dan panggil PHP -->
    <h1><?= salam("Pagi", "Muhammad"); ?></h1>
    
</body>
</html>