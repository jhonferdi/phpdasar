<?php 
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "zlatihandbms1");

//function menampilkan data
function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    };
    return $rows;
}

//function menambahkan data
function insert($insert){
    global $conn;

    $nama = htmlspecialchars($insert["nama"]);
    $nim = htmlspecialchars($insert["nim"]);
    $kelas = htmlspecialchars($insert["kelas"]);
    $gambar = htmlspecialchars($insert["gambar"]);
    //upload gambar
    $gambar = upload();
    if( !$gambar ){
        return false;
    };

    

    $query = "INSERT INTO mahasiswa VALUES ('','$nama',$nim,'$kelas','$gambar')";
    //query insert data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//function upload
function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpNama = $_FILES['gambar']['tmp_name'];

    //cek tidak ada gambar yang diupload
    if ($error === 4){
        echo "<script>
                alert('Upload gambar terlebih dahulu!');
            </script>";
        return false;
    };

    //cek yang harus diupload harus gambar
    $typeFile = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$typeFile)){
        echo "<script>
                alert('Hanya file jpg/jpeg/png!');
            </script>";
        return false;
    };

    //cek ukuran gambar terlalu besar
    if ($ukuranFile > 5555555){
        echo "<script>
                alert('ukuran file terlalu besar!');
            </script>";
        return false;
    };

    //generate nama gambar baru
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $ekstensiGambar;
    //lolos pengecekan, gambar siap diupload 
    move_uploaded_file($tmpNama, 'img/' . $namaFilebaru);
    return $namaFilebaru;
}

//function hapus
function delete($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows(($conn));
}

//function update data
function update($update){
    global $conn;

    $id = $update["id"];
    $nama = htmlspecialchars($update["nama"]);
    $nim = htmlspecialchars($update["nim"]);
    $kelas = htmlspecialchars($update["kelas"]);
    $gambarLama = htmlspecialchars($update["gambarLama"]);
    $gambar = htmlspecialchars($update["gambar"]);
    

    //cek user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4){
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }
    $gambarLama = htmlspecialchars($update["gambar"]);

    $query = "UPDATE mahasiswa SET nama = '$nama',nim = $nim,kelas = '$kelas',gambar = '$gambar' WHERE id = $id";
    //query update data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

//function search
function search($keyword){
    global $conn;

    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR kelas LIKE '%$keyword%'";
    return query($query);
}
?>