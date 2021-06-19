<?php
/* PHP + MySQL

-> Untuk menghubungkan halaman web dengan MySQL menggunakan bahasa PHP bisa dengan beberapa cara:
    > Ekstensi MySQL
        - driver/ekstensi/fungsi-fungsi yang ada di dalam php yang gunanya untuk memanipulasi database MySQL.
    > Ekstensi MySQLi
        - yang akan digunakan!. lebih teroptimasi
    > PDO (PHP Data Object)
        - dengan PDO dapat terhubung ke banyak database.

FYI
> mysqli_connect("NamaHostDatabase", "username", "password", "NamaDatabase");
> mysqli_query($KoneksikeDatabase, "QuerynyMauApa");
> Tips untuk mengetahui kesalahan ketika melakukan query, masukkan ke dalam variabel $result
> Ketika melakukan query, mysql querynya akan mengembalikan dua hal:
    1. Jika berhasil, maka queryanya akan dilakukan dan mengembalikan nilai true
    2. Jika gagal, maka fungsinya tidak akan menjalankan querynya tapi dia akan mengembalikan nilai false
> Ada 4 cara untuk mengambil data dari object result
    1. mysqli_fetch_row() --- mengembalikan array numerik
    2. mysqli_fetch_assoc() --- mengembalikan array associative
    3. mysqli_fetch_array() --- mengembalikan array numerik dan array associative (notrecomend)
    4. mysqli_fetch_object() --- mengembalikan object
     -> var_dump($mhs=>nama);
*/
    // LANGKAH3 : KONEKSI KE DATABASE
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    
    // LANGKAH4 : AMBIL DATA DARI TABEL MAHASISWA
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

    if ( !$result ) { /* NGECEK ERROR */
        echo mysqli_error($conn);
    }

    // LANGKAH5 : AMBIL DATA (FETCH) MAHASISWA DARI OBJECT RESULT
    // while( $mhs = mysqli_fetch_assoc($result) ) {
    //     var_dump($mhs);
    // }
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
    <!-- lANGKAH1 : MEMBUAT DATA STATIS -->
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
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr> <!-- Data -->
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nim"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>