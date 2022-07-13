<?php
session_start();
if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'database.php';

$id = $_GET["id"];

if (delete($id)>0){
    echo "
        <script>
            alert('Data Berhasil Dihapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Gagal Menghapus Data');
            document.location.href = 'index.php';
        </script>
    ";
}

?>