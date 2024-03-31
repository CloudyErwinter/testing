<?php 
session_start();
if( !isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}
require 'fuctions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {


    
    // 
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('Data has been successfully added!');
                document.location.href = 'index.php';
            </script>        
        ";
    } else {
        echo "
        <script>
            alert('Failed to create data!');
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data comic</title>
</head>
<body>
    <h1>Tambah data comic</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="sampul">Sampul : </label>
                <input type="file" name="sampul" id="sampul">
            </li>
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required>
            </li>
            <li>
                <label for="pengarang">Pengarang : </label>
                <input type="text" name="pengarang" id="pengarang" required>
            </li>
            <li>
                <label for="chapter">Chapter : </label>
                <input type="text" name="chapter" id="chapter" required>
            </li>
            <li>
                <label for="genre">Genre : </label>
                <input type="text" name="genre" id="genre" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
            
    </form>
</body>
</html>