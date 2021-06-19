<?php
/* SESSION

-> Pengertian
    > mekanisme penyimpanan informasi ke dalam variabel agar bisa digunakan di lebih dari satu halaman.
    
    > ketika membuat sebuah variabel. Nilai di dalam variabel tsb hanya bisa dipakai di satu halaman itu saja dan tidak bisa dipakai di halaman lain. Kecuali, dikirimkan datanya. Kita kirimkan nilai di dalam variabel itu bisa dengan menggunakan $_GET dan $_POST.
    
    > ada cara lainnya lagi dengan menggunakan session.

    > Dan menggunakan session ini datanya bisa digunakan tidak hanya di dua halaman dalam artian banyak halaman

    > informasi pada session itu disimpan di server. Begitu menyimpan sebuah variabel ke dalam session. Maka, variabel tsb akan dibuatkan di dalam server. Sampai nilai tsb akan hilang dalam satu session. Maksudnya satu session itu ketika browsernya di close atau komputer di restart.

    > Dan mengenai session ini sangat erat kaitannya dengan cookie karena keduanya sama-sama sebuah informasi atau nilai yang bisa digunakan di berbagai halaman. Perbedaannya, session disimpan di server. Sedangkan, cookie nanti disimpanya di client di dalam browsernya.

    > Dengan mekanisme session ini, data atau informasi yang dikelola itu akan ditangani oleh sebuah variabel super global yang namanya $_SESSION. Untuk mengisikan ke dalam $_SESSION ada syarat yang harus diperhatikan:
        1. jalankan function -> session_start() --- pertama kali
*/
// Contoh Penggunaanya
    session_start();
        
    $_SESSION["nama"] = "Muhammad Ridho";
?>