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
    }
    return $rows;
}

//function menambahkan data
function insert($insert){
    global $conn;

    $nama = htmlspecialchars($insert["nama"]);
    $nim = htmlspecialchars($insert["nim"]);
    $kelas = htmlspecialchars($insert["kelas"]);
    $gambar = htmlspecialchars($insert["gambar"]);

    $query = "INSERT INTO mahasiswa VALUES ('','$nama',$nim,'$kelas','$gambar')";
    //query insert data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
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
    $gambar = htmlspecialchars($update["gambar"]);

    $query = "UPDATE mahasiswa SET nama = '$nama',nim = $nim,kelas = '$kelas',gambar = '$gambar' WHERE id = $id";
    //query update data
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>