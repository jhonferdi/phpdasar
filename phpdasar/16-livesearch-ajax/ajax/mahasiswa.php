<?php
require '../database.php';
$keyword = $_GET["keyword"];

$mahasiswa = query("SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR kelas LIKE '%$keyword%'");

?>
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