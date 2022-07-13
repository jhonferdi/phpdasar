<?php 
require 'database.php';

//ambil data dari url
$id = $_GET["id"];
//query data mahasiswa yang bersangkutan
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
if( isset($_POST["ubah"]) ){

    //cek data berhasil diubah atau tidak
    if (update($_POST)>0){
        echo "
            <script>
                alert('Data Berhasil Diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Gagal Mengubah Data');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Edit data mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value=<?php echo $mhs["id"];?>>
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?php echo $mhs["nama"];?>">
            </li>
            <li>
                <label for="nim">NIM :</label>
                <input type="text" name="nim" id="nim" required value="<?php echo $mhs["nim"];?>">
            </li>
            <li>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" id="kelas" required value="<?php echo $mhs["kelas"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required value="<?php echo $mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="ubah">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>