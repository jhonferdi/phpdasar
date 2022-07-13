<?php
    // Struktur Kendali
    //Perulangan
    //for
    for($i = 0;$i < 3;$i++){
        echo "Hello World!<br>";
    }
    //while
    $j = 0;
    while ($j<3) {
        echo "HelloWWW<br>";
        $j++;
    }
    //do .. while
    $k = 0;
    do {
        echo "Hello Jhon<br>";
        $k++;
    } while ($k < 3);
    
    //foreach : perulangan khusus array

// ==============================================
    //Pengkondisian 
    //if .. else
    $x = 10;
    if ($x < 15){
        echo "benar";
    } else {
        echo "salah";
    }
    //if .. else if .. else
    $p = 20;
    if ($p < 15){
        echo "Salah";
    } else if ($p == 20){
        echo "nice";
    } else {
        echo "MenjauhiKebenaran";
    }
    //ternary

    //swith
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warnabaris {
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding='10' cellspacing='0'>
        <!-- <?php 
            for ($i = 1; $i<=5; $i++){
                echo "<tr>";
                for ($j = 1;$j<=5;$j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?> -->
        <?php for ($i = 1; $i<=5; $i++) :?>
            <?php if($i %2 == 1) :?>
            <tr class="warnabaris">
            <?php endif; ?>    
                <?php for ($j=1; $j<=5; $j++){?>
                    <td><?php echo "$i,$j" ?></td>
                <?php }?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>