<?php 
require 'fuctions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$bk = query("SELECT * FROM data_comic WHERE id_buku = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    
    // 
    if( ubah($_POST) > 0 ) {
        echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
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
    <title>Ubah data comic</title>
</head>
<body>
    <h1>Ubah data comic</h1>
    
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $bk["id_buku"]; ?>">
        <input type="hidden" name="gambarL" value="<?= $bk["sampul"]; ?>">
        <ul>
            <li>
                <label for="judul">Judul : </label>
                <input type="text" name="judul" id="judul" required value="<?= $bk["judul"] ?>">
            </li>
            <li>
                <label for="penerbit">Penerbit : </label>
                <input type="text" name="penerbit" id="penerbit" required value="<?= $bk["penerbit"] ?>">
            </li>
            <li>
                <label for="pengarang">Pengarang : </label>
                <input type="text" name="pengarang" id="pengarang" required value="<?= $bk["pengarang"] ?>">
            </li>
            <li>
                <label for="chapter">Chapter : </label>
                <input type="text" name="chapter" id="chapter" required value="<?= $bk["chapter"] ?>">
            </li>
            <li>
                <label for="genre">Genre : </label>
                <input type="text" name="genre" id="genre" required value="<?= $bk["genre"] ?>">
            </li>
            <li>
                <label for="sampul">Sampul : </label> <br>
                <img src="img/<?= $bk["sampul"] ?>" alt="" width="100"> <br>
                <input type="file" name="sampul" id="sampul">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
            
    </form>
</body>
</html>