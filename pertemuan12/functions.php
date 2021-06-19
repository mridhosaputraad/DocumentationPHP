<?php
    // KONEKSI KE DATABASE
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");


    // MENERIMA STRING QUERY
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        // Menyiapkan storage
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
    }


    // FUNGSI TAMBAH
    function tambah($data) {
        global $conn;

        // Ambil data dari tiap element dalam form
        $nama = htmlspecialchars($data["nama"]);
        $nim =  htmlspecialchars($data["nim"]);
        $email =  htmlspecialchars($data["email"]);
        $jurusan =  htmlspecialchars($data["jurusan"]);
        $gambar =  htmlspecialchars($data["gambar"]);

        // Query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                  ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        // Setelah dijalankan querynya, buat function tambah ini mengembalikan angka
        return mysqli_affected_rows($conn);
    }


    // FUNGSI HAPUS
    function hapus($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

        return mysqli_affected_rows($conn);
    }


    // FUNGSI UBAH
    function ubah($data) {
        global $conn;

        // Ambil data dari tiap element dalam form
        $id = $data["id"];
        $nama = htmlspecialchars($data["nama"]);
        $nim =  htmlspecialchars($data["nim"]);
        $email =  htmlspecialchars($data["email"]);
        $jurusan =  htmlspecialchars($data["jurusan"]);
        $gambar =  htmlspecialchars($data["gambar"]);

        // Query insert data
        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    nim = '$nim',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                  WHERE id = $id
                ";
        mysqli_query($conn, $query);

        // setelah dijalankan querynya, buat function tambah ini mengembalikan angka
        return mysqli_affected_rows($conn);
    }


    // FUNGSI PENCARIAN
    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa
                    WHERE
                  nama LIKE '%$keyword%' OR
                  nim LIKE '%$keyword%' OR
                  email LIKE '%$keyword%' OR
                  jurusan LIKE '%$keyword%'
                ";
        return query($query);
    }
?>