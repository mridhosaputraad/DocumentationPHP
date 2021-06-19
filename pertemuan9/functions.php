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
?>