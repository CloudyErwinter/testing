<?php 
require 'fuctions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // 
    if( tambah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>        
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
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

    <form action="" method="post">
        <ul>
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