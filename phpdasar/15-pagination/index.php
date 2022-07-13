<?php
    session_start();
    if (!isset($_SESSION["login"])){
        header("Location: login.php");
        exit;
    }
    require "database.php";
    //pagination
    //konfigurasi mau berapa data yang ditampilkan
    $jumlahDataHalaman = 2;
    $jumlahData = count(query("SELECT * FROM mahasiswa")); //count menghitung jumlah data
    $jumlahHalaman = ceil($jumlahData/$jumlahDataHalaman); //ceil pembulatan ke atas
    $halamamAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataHalaman*$halamamAktif)-$jumlahDataHalaman; 

    //ambil data/query dari tabel mahasiswa dari id terbesar > terkecil
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataHalaman");

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
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="logout.php">Logout</a><br>
    <a href="insert.php">tambah data mahasiswa</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" autofocus placeholder="Cari Data Mahasiswa" autocomplete="off">
        <button type="submit" name="search">Search</button>
    </form>
    <!-- Navigasi Pagination -->
    <?php if($halamamAktif>1) :?>
    <a href="?halaman<?php echo $halamamAktif?>">&laquo;</a>
    <a href="?halaman=<?php echo $halamamAktif - 1;?>">&lt;</a>
    <?php endif;?>

    <?php for($i = 1;$i <= $jumlahHalaman; $i++): ?>
        <?php if($i == $halamamAktif):?>
        <a href="?halaman=<?php echo $i;?>" style="font-wight: bold; color:red"><?php echo $i;?></a>
        <?php else:?>
            <a href="?halaman=<?php echo $i;?>"><?php echo $i;?></a>
        <?php endif;?>
    <?php endfor;?>

    <?php if($halamamAktif<$jumlahHalaman) :?>
    <a href="?halaman=<?php echo $halamamAktif + 1;?>">&gt;</a>
    <a href="?halaman=<?php echo $halamamAktif = $jumlahHalaman?>">&raquo;</a>
    <?php endif;?>
    <!-- ////////////////// -->
    
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
</body>
</html>