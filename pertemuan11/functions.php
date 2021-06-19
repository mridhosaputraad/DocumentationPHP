<?php
    // LANGKAH1 : KONEKSI KE DATABASE
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // LANGKAH4 : MENERIMA STRING QUERY
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
        // LANGKAH7 : Ambil data dari tiap element dalam form
        $nama = htmlspecialchars($data["nama"]);
        $nim =  htmlspecialchars($data["nim"]);
        $email =  htmlspecialchars($data["email"]);
        $jurusan =  htmlspecialchars($data["jurusan"]);
        $gambar =  htmlspecialchars($data["gambar"]);

        // LANGKAH 8 : Query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                  ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        // LANGKAH 9: setelah dijalankan querynya, buat function tambah ini mengembalikan angka
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
?>