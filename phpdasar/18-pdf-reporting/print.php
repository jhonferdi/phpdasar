<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

require "database.php";
//ambil data/query dari tabel mahasiswa dari id terbesar > terkecil
$mahasiswa = query("SELECT * FROM mahasiswa");

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>id</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Kelas</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    </table>
</body>
</html>
';

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output();
?>

