<?php
require 'fuctions.php';
if( isset($_POST["register"]) ) {
    if( registrasion($_POST) > 0 ) {
        echo "<script>
                alert('New user has been added!')
            </script>";
    } else {
        echo mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasion</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Registrasion</h1>

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
            <li>
                <label for="password2">Confirm Password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            <li>
                <button type="submit" name="register">Register</button><br>
                Already Have An Account? Login <a href="login.php"> Here</a>
            </li>
        </ul>
    </form>
</body>
</html>