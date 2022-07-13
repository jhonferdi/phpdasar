<?php
//Associative Array

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            margin: 2px;
            background-color: cyan;
            line-height: 50px;
            text-align: center;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 25%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php
$angka = [[2,4],[5,7],[2,32,56]];
?>
    <?php foreach($angka as $a) :?>
        <?php foreach($a as $ainside) :?>
            <div class="kotak">
                <?php echo $ainside;?>
            </div>
        <?php endforeach;?>
    <?php endforeach;?>
</body>
</html>