<?php
    // LANGKAH2: MENGHUBUNGKAN
    require 'functions.php';
    
    // LANGKAH3 : AMBIL DATA DARI TABEL MAHASISWA
    $mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <!-- LANGKAH 5 : MENGUPLOAD DATA BARU -->
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <!-- LANGKAH1 : MEMBUAT DATA STATIS -->
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- LANGKAH2 : MEMBUAT BAGIAN DATA -->
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
                <a href="">ubah</a> |
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
</body>
</html>