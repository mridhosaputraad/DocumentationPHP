<?php
    require 'functions.php';

    // LANGKAH 1 : AMBIL DATA URL
    $id = $_GET["id"];
    
    // LANGKAH 2 : QUERY DATA MAHASISWA BERDASARKAN ID
    $mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];    

    // Cek apakah tombol submit sudah ditekan atau belum
    if( isset($_POST["submit"]) ) {
        //  Cek apakah data berhasil di ubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('data berhasil diubah!');
                    document.location.href = 'latihan.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diubah!');
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
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <!-- LANGKAH 3 BUAT INPUT ID -->
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama"  value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required value="<?= $mhs["nim"];?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email"  value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan"  value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>
    </form>
    
</body>
</html>