<?php
/* Membuat data mahasiswa lebih dari satu */
// Harus membuat secara berurutan
$mahasiswa = [
    ["Muhammad Ridho", "06031281823023", "Pendidikan Ekonomi", "muhammadridho0773@gmail.com"],
    ["Dendi Febriansyah", "06031281823021", "Pendidikan Ekonomi", "dendifebriansyah@gmail.com"],
    ["Bambang", "060311785949", "Teknik Komputer", "bambang@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) :?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>