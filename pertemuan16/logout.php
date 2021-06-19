<?php
    // Jalankan session
    session_start();

    // Menghilangkan session
    $_SESSION = [];
    session_unset();
    session_destroy();

    // Pindahkan
    header("Location: login.php");
    exit;

?>