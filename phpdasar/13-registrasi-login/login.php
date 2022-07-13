<?php 
require 'database.php';

if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    //cek username
    if (mysqli_num_rows($result)===1){
        //cek password
        $row_pass = mysqli_fetch_assoc($result);
        if (password_verify($password, $row_pass["password"])){
            header("Location: index.php");
            exit;
        };
    };
    $error = true;
    
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>label {
        display: block;
    };
    
    </style>
</head>
<body>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username: </label>
                <input type="text" name="username" id="username" required>
            </li>
            <li>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password" required>
            </li>
            <li>
                <button type="submit" name="login">Sign-In</button>
            </li>
        </ul>
    </form>
</body>
</html>