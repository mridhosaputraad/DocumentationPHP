<?php
    // JALANKAN SESSION
    session_start();

    // CEK USER SUDAH LOGIN ATAU BELUM
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    // MENGHUBUNGKAN
    require 'functions.php';
    
    // AMBIL DATA DARI TABEL MAHASISWA
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC"); /* Jika ingin mengurutkan data mahasiswa dimulai dari id terkecil gunakan ASC. Dimulai dari id terbesar DESC */

    // TOMBOL CARI DITEKAN
    if( isset($_POST["cari"]) ) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 70px;
            position: absolute;
            top: 130px;
            left: 325px;
            z-index: -1;
            display: none;
        }
    </style>
</head>
<body>
    <!-- LOGOUT -->
    <a href="logout.php">Logout</a>

    <h1>Daftar Mahasiswa</h1>

    <!-- MENGUPLOAD DATA BARU -->
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <!-- MEMBUAT TOMBOL PENCARIAN -->
    <form action="" method="post">
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari</button>
    
        <img src="img/loader.gif" class="loader">

    </form>
    <br>

    <!-- MEMBUAT WADAH LIVE SEARCH -->
    <div id="container">

        <!-- MEMBUAT DATA STATIS -->
        <table border="1" cellpadding="10" cellspacing="0">
            <!-- MEMBUAT BAGIAN DATA -->
            <tr> <!-- Header -->
                <th>No.</th>
                <th>Aksi</th> 
                <th>Gambar</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>
            
            <?php $i = 1; ?> 
            <?php foreach( $mahasiswa as $mhs ) : ?>
            <tr> <!-- Data -->
                <td><?= $i; ?></td>
                <td>
                    <!-- LANGKAH11: UBAH DATA -->
                    <a href="ubah.php?id=<?= $mhs["id"]; ?>">ubah</a> |
                    <!-- LANGKAH10:HAPUS DATA -->
                    <a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
                </td>
                <td><img src="img/<?= $mhs["gambar"]; ?>" width="50"></td>
                <td><?= $mhs["nim"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>