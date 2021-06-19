<?php
/* Array Asosiatif */
$mahasiswa = [
    [
        "Nama" => "Muhammad Ridho", 
        "NIM" => "012345678934", 
        "Jurusan" => "Pendidikan Ekonomi", 
        "Email" =>"ketikrek@gmail.com",
        "Gambar" => "Dojima.jpg"
    ],
    [
        "Nama" => "David", 
        "NIM" => "023456784930", 
        "Jurusan" => "Teknik Persinglelan", 
        "Email" =>"silahkan@gmail.com",
        "Gambar" => "david.png"
        // "Tugas" => [80,90,95]
    ],
    [
        "NIM" => "060356362646",
        "Nama" => "Bambang", 
        "Jurusan" => "Kang Service", 
        "Email" =>"bambang@gmail.com",
        "Gambar" => "erik.png"
    ]
];
// echo $mahasiswa[1]["Tugas"][1];
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
        <li>
            <img src="img/<?= $mhs["Gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["Nama"]; ?></li>
        <li>NIM : <?= $mhs["NIM"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
        <li>Email : <?= $mhs["Email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>