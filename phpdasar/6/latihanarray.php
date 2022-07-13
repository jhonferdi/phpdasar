<?php 
$mhs = [["Jhonferdi", 1301194028, "cirebon"],["Alexander", 1301194444, "rusia"],["Asep", 1301199999, "kuningan"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mhs as $m) :?> 
    <ul>
            <li><?php echo $m[0]?></li>
            <li><?php echo $m[1]?></li>
            <li><?php echo $m[2]?></li>
    </ul>
    <?php endforeach?>
</body>
</html>