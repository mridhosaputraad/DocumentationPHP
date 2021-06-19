<?php
    // Panggil Library di Dalam Vendor
    require_once __DIR__ . '/vendor/autoload.php';

    // MENGHUBUNGKAN
    require 'functions.php';
    
    // AMBIL DATA DARI TABEL MAHASISWA
    $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id ASC");

    // INSTANSIASI
    $mpdf = new \Mpdf\Mpdf();

    // MENCETAK HTML KE DALAM PDF
    $html = '<!DOCTYPE html>
             <html lang="en">
             <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Daftar Mahasiswa</title>
                <link rel="stylesheet" href="css/print.css">
             </head>
             <body>
                <h1>Daftar Mahasiswa</h1>
                <table border="1" cellpadding="10" cellspacing="0">
            
                    <tr>
                        <th>No.</th> 
                        <th>Gambar</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                    </tr>';

                $i = 1;
                foreach( $mahasiswa as $mhs ) {
                    $html .= '
                    <tr>
                        <td>'. $i++ .'</td>
                        <td><img src="img/'. $mhs["gambar"] .'" width="50"></td>
                        <td>'. $mhs["nim"] .'</td>
                        <td>'. $mhs["nama"] .'</td>
                        <td>'. $mhs["email"] .'</td>
                        <td>'. $mhs["jurusan"] .'</td>
                    </tr>';
                }

    $html .=    '</table>
                
             </body>
             </html>';
    $mpdf->WriteHTML($html);
    $mpdf->Output('daftar-mahasiswa.pdf', 'I');
?>
