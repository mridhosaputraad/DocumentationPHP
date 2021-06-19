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
        
        // Upload gambar
        $gambar = upload();
        if( !$gambar ) {
            return false;
        }

        // Query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                  ('', '$nama', '$nim', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        // Setelah dijalankan querynya, buat function tambah ini mengembalikan angka
        return mysqli_affected_rows($conn);
    }


    // FUNGSI UPLOAD FILE
    function upload() {
        // Mengambil datanya
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // Cek apakah tidak ada file yang di upload
        if( $error === 4 ) {
            echo "<script>
                    alert('pilih gambar terlebih dahulu!');
                  </script>";
            return false;
        }

        // Cek apakah yang diupload adalah file
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
                    alert('yang anda upload bukan gambar!');
                  </script>";
            return false;
        }

        // Cek jika ukurannya terlalu besar
        if( $ukuranFile > 1000000 ) {
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                  </script>";
            return false;
        }

        // Generate nama File baru
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;

        // Lolos pengecekan, gambar siap diupload
        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        return $namaFileBaru;
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
        $gambarLama =  htmlspecialchars($data["gambarLama"]);

        // Cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4 ) {
            $gambar = $gambarLama;
        } else {
            $gambar =  upload();
        }
        

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


    // FUNGSI REGISTRASI
    function registrasi($data) {
        global $conn;

        /* > Ambil datanya */
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        /* > Cek username sudah ada atau belum */
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if( mysqli_fetch_assoc($result) ) {
            echo "<script>
                alert('username sudah terdaftar!');
                  </script>";
            return false;
        }

        /* > Cek Konfirmasi password */
        if( $password !== $password2 ) {
            echo "<script>
                    alert('konfirmasi password tidak sesuai!');
                 </script>";
            return false;
        }

        /* > Enkripsi password */
        $password = password_hash($password, PASSWORD_DEFAULT);

        /* > Tambahkan userbaru ke database */
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

        return mysqli_affected_rows($conn);
    }
?>