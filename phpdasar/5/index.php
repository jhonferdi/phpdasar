<?php
//built-in Function

    //Date
    // echo date("1,d-M-Y");

    // Time
    // UNIX Timestamp
    // detol yang sudah berlalu sejak 1 januari 1970
    // echo time();

    //gabungan time dan date
    // echo date("D M Y",time()+60*60*24*99); //kalo mau tau umur seseorang +nya diganti -
    
    //mktime (membuat detiks sendiri)
    //jam, menit ,detik, bulan, tanggal, tahun
    // echo date("l", mktime(0,0,0,8,25,2001));

    //strtotime (sama kyk mktime bedanya strtotimee pake string)
    echo date("l", strtotime("25 aug 1985"));
?>