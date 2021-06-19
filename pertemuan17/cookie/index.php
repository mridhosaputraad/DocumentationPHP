<?php
/* COOKIE ($_COOKIE)

-> Konsep
    > cookie itu sebetul mirip seperti session, jadi merupakan informasi yang bisa diakses dibanyak halaman web.
    > perbedaanya cookie disimpan di browser/client. Sedangkan, session adalah informasi yang disimpan di server
    > sehingga client itu bisa dimanipulasi cookie-nya, maksudnya bisa menambah cookie baru, mengedit, dan menghapus.
    > cookie hanya berlaku selama satu session
    
-> Penggunaan cookie untuk
    > mengenali user
        > mirip seperti session, jadi browsernya bisa tahu siapa yang sedang login/mengakses sebuah halaman tertentu
    > shopping cart
        > seperti fitur keranjang belanja di toko online
    > personalisasi
        > untuk mengetahui preferensi/perilaku dari seorang user. Biasanya digunakan untuk iklan

-> Cara membuat $_COOKIE
    > setcookie(key, value, time(opsi))
*/
// Pengimplementasian
/* > Membuat cookie */
setcookie('nama', 'Muhammad', time()+60);
?>