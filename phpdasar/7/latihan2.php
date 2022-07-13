<?php
// Array Associative
$mahasiswa = [["foto"=>"jack.jpg","nama"=>"Ferdinan","nim"=>"1301194028","kelas"=>"IF-43-12"],["foto"=>"spector.jpg","nama"=>"Jhon","nim"=>"1301194444","kelas"=>"IF-43-12"]];

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
    
    <?php foreach ($mahasiswa as $m): ?>
    <ul>
        <li><img src="<?php echo $m["foto"];?>" alt=""></li>
        <li><?php echo $m["nama"] ?></li>
        <li><?php echo $m["nim"] ?></li>
        <li><?php echo $m["kelas"] ?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>