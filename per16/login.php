<?php
session_start();
require 'fuctions.php';

if( isset($_POST["login"]) ) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result) === 1) {
        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // cek session
            $_SESSION["login"] = true;
            header("Location: index.php");
            exit;
        }
    }
    
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Login</h1>

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-weight: bold;">Username or Password is wrong</p>
    <?php endif; ?>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
                <button type="submit" name="login">Login</button><br>
                Don't Have Any Account? Resgister <a href="registrasi.php"> Here</a>
        </ul>
    </form>
</body>
</html>