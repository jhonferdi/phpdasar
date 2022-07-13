<?php
    require "database.php";
    //ambil data/query dari tabel mahasiswa
    $mahasiswa = query("SELECT * FROM mahasiswa");

    
    // $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    // if (!$result){
    //     echo mysqli_error($conn);
    // };

    //ambil data mahasiswa dari object result
    //mysqli_fetch_row() //mengembalikan array numerik
    //mysqli_fetch_assoc() //mengembalikan array assosiative //recommended!
    //mysqli_fetch_array() //mengembalikan numerik/string namun dobel
    //mysqli_fetch_object() //$mhs->nama

    // while ($mhs = mysqli_fetch_assoc($result)){
    //     var_dump($mhs);
    // };
    
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
            <td><img src="<?php echo $row["gambar"];?>" alt=""></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>