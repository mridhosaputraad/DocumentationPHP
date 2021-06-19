<?php
/* Contoh Kasus untuk penggunaan superglobals $_GET */
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
    ],
    [
        "Nama" => "Bambang",
        "NIM" => "060356362646",
        "Jurusan" => "Kang Service", 
        "Email" =>"bambang@gmail.com",
        "Gambar" => "erik.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<ul>
<?php foreach( $mahasiswa as $mhs ) :?>
    <li>
        <!-- Langkah1: Metode Request GET -->
        <a href="latihan2.php?Nama=<?= $mhs["Nama"]; ?>&NIM=<?= $mhs["NIM"]; ?>&Jurusan=<?= $mhs["Jurusan"]; ?>&Email=<?= $mhs["Email"]; ?>&Gambar=<?= $mhs["Gambar"]; ?>"><?= $mhs["Nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>