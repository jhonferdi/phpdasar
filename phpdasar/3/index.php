<?php
    // Sintaks PHP

    // Standar Output
    // echo, print, print_r, var_dump
    echo "Jhon Ferdi ";
    // echo 123;
    // echo true;
    // echo false;
    print "Jhon Ferdi ";
    print_r("Jhon Ferdi ");
    var_dump("Jhon Ferdi");
// =======================================================
    //penulisan sintax php (ada di paling bawah)
// =======================================================
    //variable dan tipe data
    //variable(tidak boleh diawal dengan angka, tapi boleh mengandung angka)
    $nama = "Jhonferdi";
    echo "Halo, nama saya $nama <br>";
// =====================================================
    //Operator
    //aritmatika (+ - * / %)
    $x = 9;
    $y = 3;
    echo " " . $x * $y . " br";
    //Penggabung string / concat ( . )
    $nama_depan = "Alexander";
    $nama_belakang = "Asep";
    echo $nama_depan . " " . $nama_belakang;
    //assignment ( =, +=, -=, *=, /=, %=. .=)
    $x = 1;
    $x += 5;
    echo " ".$x;
    $namaa = "Alexander";
    $namaa .= " ";
    $namaa .= "Nat";
    echo $namaa;
    // Perbandingan (< > <= >= == !=)
    var_dump(1=="1");
    //identitas ( === !== ) untuk ngecek boolean antara angka/string
    var_dump(1==="1");
    // Logika (&&, ||, !) dipake di pengkondisian
    $z = 40;
    var_dump($z < 30 && $z % 2 == 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. php di html (lebih efektif)-->
    <h1>Halo <?php echo $nama;?></h1>
    <!-- 2. html di php -->
    <?php 
        echo "<h1>Halo, Jhon</h1>"
    ?>
</body>
</html>