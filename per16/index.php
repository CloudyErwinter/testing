<?php
session_start();
if( !isset($_SESSION["login"])) {
    header("location:login.php");
    exit;
}
require 'fuctions.php';
$comic = query("SELECT * FROM data_comic");

// tombol cari ditekan
if( isset($_POST["find"]) ) {
    $comic = find($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Buku Comic</h1>

<a href="tambah.php">Tambah data comic</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" id="" size="30" autofocus 
    placeholder="Put keyword name..." autocomplete="off">
    <button type="submit" name="find">Find!</button>

<br><br>
</form>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Sampul</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Chapter</th>
        <th>Genre</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $comic as $bk ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="ubah.php?id=<?= $bk["id_buku"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $bk["id_buku"]; ?>" onclick="return confirm('You sure?');">hapus</a>
        </td>
        <td><img src="img/<?= $bk["sampul"]; ?>" alt="" width="20%"></td>
        <td><?= $bk["judul"]; ?></td>
        <td><?= $bk["pengarang"]; ?></td>
        <td><?= $bk["penerbit"]; ?></td>
        <td><?= $bk["chapter"]; ?></td>
        <td><?= $bk["genre"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
    
</body>
</html>