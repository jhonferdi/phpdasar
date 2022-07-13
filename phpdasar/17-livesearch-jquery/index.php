<?php
    session_start();
    if (!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require "database.php";
    //ambil data/query dari tabel mahasiswa dari id terbesar > terkecil
    $mahasiswa = query("SELECT * FROM mahasiswa");

    //search data mahasiswa//////////////////////////////////////////////////////////////
    if (isset($_POST["search"])){
        $mahasiswa = search($_POST["keyword"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 97px;
            left: 150px;
            z-index: -1;
            display: none;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="logout.php">Logout</a><br>
    <a href="insert.php">tambah data mahasiswa</a>
    <br><br>
    
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Cari Data Mahasiswa" autocomplete="off" id="keyword">
        <button type="submit" name="search" id="button-search">Search</button>
        <img src="img/loading.gif" alt="" class="loader">
    </form>
    <br>

    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Kelas</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            <?php $i = 1;?>
            <?php foreach($mahasiswa as $row) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["nama"]; ?></td>
                <td><?php echo $row["nim"]; ?></td>
                <td><?php echo $row["kelas"]; ?></td>
                <td><img src="img/<?php echo $row["gambar"];?>" alt=""></td>
                <td>
                    <a href="update.php?id=<?php echo $row["id"];?>">ubah</a>
                    <a href="delete.php?id=<?php echo $row["id"];?>" onclick="return confirm('apakah anda yakin menghapus data ini secara permanen?')">hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>
        </table>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>