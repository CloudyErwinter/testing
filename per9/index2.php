<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel comic / query data comic
$result = mysqli_query($db, "SELECT * FROM data_comic");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object() // mengembalikan object tanpa nomor atau nama

// while ($bk = mysqli_fetch_assoc($result)) {
//     var_dump($bk);
// }
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

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Judul</th>
        <th>Chapter</th>
        <th>Genre</th>
    </tr>
    <?php $i = 1; ?>
    <?php while( $bk = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><?= $bk["pengarang"]; ?></td>
        <td><?= $bk["penerbit"]; ?></td>
        <td><?= $bk["judul"]; ?></td>
        <td><?= $bk["chapter"]; ?></td>
        <td><?= $bk["genre"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>
    
</body>
</html>