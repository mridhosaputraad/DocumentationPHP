<?php
    // Jalankan session
    session_start();

    // Menghilangkan session
    $_SESSION = [];
    session_unset();
    session_destroy();

    // Menghilangkan cookie
    setcookie('id', '', time() - 3600);
    setcookie('key', '', time() - 3600);

    // Pindahkan
    header("Location: login.php");
    exit;

?>