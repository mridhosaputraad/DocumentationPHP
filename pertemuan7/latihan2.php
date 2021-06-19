<?php
// Cek apakah tidak ada data di $_GET
if( !isset($_GET["Nama"]) ||
    !isset($_GET["NIM"]) ||
    !isset($_GET["Jurusan"]) ||
    !isset($_GET["Email"]) ||
    !isset($_GET["Gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit; /* supaya script dibawahnya tidak dieksekusi */
}
/* artinya ketika $_GET["Nama"] belum di set, paksa usernya buat pindah */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>

<ul>
    <!-- Langkah2: Tangkap dengan superglobals $_GET -->
    <li><img src="img/<?= $_GET["Gambar"]; ?>"></li>
    <li><?= $_GET["Nama"]; ?></li>
    <li><?= $_GET["NIM"]; ?></li>
    <li><?= $_GET["Jurusan"]; ?></li>
    <li><?= $_GET["Email"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa</a>
    
</body>
</html>