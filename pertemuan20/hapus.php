<?php
    // JALANKAN SESSION
    session_start();

    // CEK USER SUDAH LOGIN ATAU BELUM
    if( !isset($_SESSION["login"]) ) {
        header("Location: login.php");
        exit;
    }

    // Hubungkan
    require 'functions.php';

    // Ambil data url
    $id = $_GET["id"];

    // Cek apakah data sudah dihapus
    if( hapus($id) > 0) {
        echo "
            <script>
                alert('data berhasil dihapus!');
                document.location.href = 'latihan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal dihapus!');
                document.location.href = 'latihan.php';
            </script>
        ";
    }
?>