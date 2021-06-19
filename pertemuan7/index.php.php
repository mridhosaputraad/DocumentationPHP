<?php
/* GET & POST

-> sebelum mempelajari materi ini, harus mengerti sesuatu yang disebut superglobals. superglobals ini adalah variabel yang dimiliki php. variabelnya adalah variabel special.
-> sebelum mempelajari superglobals tsb, kita harus paham terlebih dahulu mengenai variabel Scope / lingkup dari sebuah variabel di dalam php.

-> Variabel scope
    > lingkup dari sebuah variabel ada yang namanya variabel local, dan ada variabel global.

-> Variabel Superglobals
    > variabel-variabel yang sudah dimiliki php yang bisa diakses dimanapun dan kapanpun di dalam halaman php. Variabelnya sebagai berikut:
        - $_GET
        - $_POST
        - $_REQUEST
        - $_SESSION
        - $_COOKIE
        - $_SERVER
        - $_ENV
    > Dan dari 7 variabel diatas, semuanya adalah tipe array asosiative

FYI
-> Metode request get dengan variabel superglobals $_GET berbeda.
    > Metode request get, adalah metode pengiriman data melalui url dan data tsb bisa diambil/ditangkap oleh variabel superglobals $_GET
-> Metode request post itu berbeda dengan metode request get yang mana datanya dikirim melalui url.
    > Metode request post, datanya dikirim melalui form.walaupun dengan menggunakan form juga nanti kita bisa gunakan get.
    > kelebihan menggunakan post, ketika mengirimkan data ke sebuah tempat, data tsb tidak akan kelihatan di urlnya (sangat penting ketika membuat login).
*/

// Variabel Scope / lingkup variabel
    $x = 10; /* bagian ini disebut variabel local */
        echo $x;
        echo "<br>";
    /* artinya membuat sebuah variabel x yang bisa digunakan khusus untuk halaman latihan1.php saja */

    $y = 15;

    function tampilY() {
        $y = 20;
        echo $y; /* lingkup variabel y di dalam function itu berbeda dengan lingkup variabel y di luar function */
        echo "<br>";
    }   

    tampilY();
    echo $y;
    echo "<br>";

/* Kasusnya mengambil variabel yang ada diluar functionnya */
    $a = 30;

    function tampilA() {
        global $a;
        echo $a; 
        echo "<br>";
    }   

    tampilA();
    echo "<br>";


// Superglobals
/* > $_GET */
    // $_GET["nama"] = "Muhmmad Ridho";
    // $_GET["nim"] = "06031281823023";
    // var_dump($_GET);
    // echo "<br>";
    
    /* khusus untuk $_GET ini, ada cara lain untuk masukkan data kedalamnya. Caranya adalah menggunakan string di dalam urlnya atau di alamat websitenya(Metode Request Get) */
    var_dump($_GET);
    echo "<br>";

/* > $_POST */
    var_dump($_POST);
    echo "<br>";

/* > $_SERVER */
    // var_dump($_SERVER);
    echo $_SERVER["SERVER_NAME"];
?>