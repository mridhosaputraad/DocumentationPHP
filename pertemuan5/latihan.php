<?php
/* Membuat data mahasiswa */
$mahasiswa = ["Muhammad Ridho", "06031281823023", "Pendidikan Ekonomi", "muhammadridho0773@gmail.com"];
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
    <ul>
        <?php foreach( $mahasiswa as $mhs ) :?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>