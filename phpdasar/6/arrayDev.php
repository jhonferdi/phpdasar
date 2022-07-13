<?php
//Output untuk Developer
//array (tipe datanya boleh beda di php) key dan value

//cara lama array
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];

//menampilkan semua isi array var_dump() dan print_r()
// var_dump($bulan);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen array
echo $bulan[2];
echo "<br>";

// menambahkan 1 elemen baru
print_r($bulan);
$bulan[] = "April";
echo "<br>";
print_r($bulan);
?>