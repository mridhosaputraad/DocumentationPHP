<?php
/* UPLOAD

-> Mengenai file handling, atau bagaimana cara kita menangani file meggunakan sintaks PHP. Ada beberapa yang harus dipahami:
    1. <input type='file' ...
        - adalah sebuah input yang khusus menangani file

    2. Atribut untuk form guna mengelola sebuah inputan yang di sebut dengan enctype singkatan dari encodingtype
        - jadi type encoding yang seperti apa yang harus kita gunakan untuk menangani file

    3. Variabel super globals $_FILES
        - khusus dibuat untuk menangani data file sebelumnya setelah memiliki input type file.
        - isi dari $_FILES adalah array associatif tapi 2 dimensi:
            > Dimensi pertama adalah nama input type filenya
            > Dimensi kedua, ada 5 buah element array:
                - "name" --- nama file dari file yang di upload
                - "type" --- jenis filenya
                - "tmp_name" --- tempat penyimpanan sementara dari file yang di upload
                - "error" --- menghasilkan angka. Digunakan ketika memberi pesan ke user untuk mengupload file
                - "size" --- jika ingin membatasi ukuran maksimal file yang di upload

    4. Sebuah function di PHP yaitu move_uploaded_file(filename, destination)
        - fungsi inilah yang betul-betul memindahkan/mengupload file yang kita miliki di komputer kedalam server.

FYI
> Gambar itu bisa kita masukin ke database langsung. Karena di dalam mysqli ada sebuah type data yang namanya blob() dalam bentuk biner. Kekurangannya:
    1. Membuat ukuran databaseny menjadi sangat besar karena yang dimasukin gambar buka text
    2. Akan membuat databasenya menjadi berat karena ukuran yang besar tadi. 
    3. Karena bekerja dengan file. File itu tempatnya di dalam direktori bukan di dalam database. Yang akan dilakukan, file akan diupload ke dalam direktori. Sedangkan, yang akan di INSERT ke database sebagai string itu adalah tetap nama filenya.

> explode(delimiter, string)
    > fungsi untuk memecah sebuah string menjadi array menggunakan yang namanya delimiter

> in_array(needle, haystack)
    > untuk ngecek adakah sebuah string di dalam sebuah array

> uniqid()
    > akan membangkitkan string random angka yang akan menjadi nama file. Tapi baru nama stringny saja, belum ada ekstensi nama filenya jadi harus disambungkan dengan ekstensi filenya
*/
?>