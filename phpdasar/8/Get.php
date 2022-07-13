<?php 
// Variable Superglobals = array Assosiative
//$_GET, $_POST, $_SESSION, $_COOKIE
$mahasiswa = [["foto"=>"jack.jpg","nama"=>"Ferdi","nim"=>"1301194028","kelas"=>"IF-43-12"],["foto"=>"spector.jpg","nama"=>"Jhon","nim"=>"1301194444","kelas"=>"IF-43-12"]];
 var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
</head>
<body>
    <div class="kotak">
        <?php foreach( $mahasiswa as $mhs) :?>
            <li><a href="Get2.php?nama=<?php echo $mhs["nama"];?>&nim=<?php echo $mhs["nim"];?>&kelas=<?php echo $mhs["kelas"];?>"><?php echo $mhs["nama"];?></a></li>
        <?php endforeach;?>
    </div>
</body>
</html>
