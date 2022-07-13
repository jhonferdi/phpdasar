<?php 
require 'database.php';

if (isset($_POST["signup"])){
    if (registration($_POST) > 0){
        echo "<script>
            alert('Anda berhasil Sign-Up');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Sign-Up</h1>
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
                <label for="password2">Confirm Password: </label>
                <input type="password" name="password2" id="password2" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <button type="submit" name="signup">Sign-Up</button>
            </li>
        </ul>
    </form>
</body>
</html>