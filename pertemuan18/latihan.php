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

    // KONFIGURASI PAGINATION
    $jumlahDataPerHalaman = 4;
    $jumlahData = count(query("SELECT * FROM mahasiswa"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1; /* Dengan operator ternary */
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;
    
    // AMBIL DATA DARI TABEL MAHASISWA
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC LIMIT $awalData, $jumlahDataPerHalaman"); /* Jika ingin mengurutkan data mahasiswa dimulai dari id terkecil gunakan ASC. Dimulai dari id terbesar DESC */

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
        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>
    <br><br>

    <!-- NAVIGASI PAGINATION -->
    <?php if( $halamanAktif > 1 ) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        <?php if( $i == $halamanAktif ) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif;?>
    <?php endfor; ?>

    <?php if( $halamanAktif < $jumlahHalaman ) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>

    <br>

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
        
        <?php $i = $awalData + 1; ?> 
        <?php foreach( $mahasiswa as $mhs ) : ?>
        <tr> <!-- Data -->
            <td><?= $i; ?></td>
            <td>
                <!--  UBAH DATA -->
                <a href="ubah.php?id=<?= $mhs["id"]; ?>">ubah</a> |
                <!-- HAPUS DATA -->
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
</body>
</html>