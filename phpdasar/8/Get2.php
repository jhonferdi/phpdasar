<?php
// cek tidak ada data di $_GET
if( !isset($_GET["nama"]) || !isset($_GET["nim"]) || !isset($_GET["kelas"])){
    header("Location: Get.php");
    exit;
}
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
    <ul>
        <li><img src="jack.jpg" alt=""></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["nim"]; ?></li>
        <li><?php echo $_GET["kelas"]; ?></li>
    </ul>

<a href="Get.php">Balik</a>
</body>
</html>