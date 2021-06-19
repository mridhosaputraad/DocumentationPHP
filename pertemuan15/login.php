<?php
    require 'functions.php';

    // Cek apakah tombol sumbit sudah ditekan atau belum
    if( isset($_POST["login"]) ) {

        // Menangkap data
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Cek username/password sudah ada atau belum
        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

        // Cek username
        if( mysqli_num_rows($result) === 1) {

            // Cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                header("Location: latihan.php");
                exit;
            }
        }

        $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Halaman Login</h1>

    <!-- MENAMPILKAN PESAN ERROR -->
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username"> 
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password"> 
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
    </form>
</body>
</html>