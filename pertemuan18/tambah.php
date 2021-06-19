<?php
    // JALANKAN SESSION
    session_start();

    // CEK USER SUDAH LOGIN ATAU BELUM
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    // Hubungkan
    require 'functions.php';

    // Cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {

        // Cek apakah data berhasil di tambahkan atau tidak
        if( tambah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil ditambahkan!');
                    document.location.href = 'latihan.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan!');
                    document.location.href = 'latihan.php';
                </script>
            ";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" >
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" >
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" >
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar" >
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>