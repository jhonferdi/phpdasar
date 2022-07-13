<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- untuk jika submit pindah ke halaman sendiri -->
    <!-- <?php if(isset($_POST["submit"])) :?>
        <h1>Halo <?php echo $_POST["nama"]; ?></h1>
    <?php endif?> -->
    <form action="post2.php" method="post">
        masukan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>