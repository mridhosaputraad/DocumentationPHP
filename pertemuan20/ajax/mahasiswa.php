<?php
    // Buat pura-pura loading
    usleep(500000);

    // Menghubungkan
    require '../functions.php';

    // Query data mahasiswa
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM mahasiswa
                    WHERE
                  nama LIKE '%$keyword%' OR
                  nim LIKE '%$keyword%' OR
                  email LIKE '%$keyword%' OR
                  jurusan LIKE '%$keyword%'
              ";
    $mahasiswa = query($query);
?>
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
            <!-- UBAH DATA -->
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