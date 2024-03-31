<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["pengarang"]) || 
    !isset($_GET["penerbit"]) ||
    !isset($_GET["volume"]) ||
    !isset($_GET["judul"])  ) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Komik</title>
</head>
<body>
    
    <ul>
        <li><?= $_GET["judul"]; ?></li>
        <li><?= $_GET["pengarang"]; ?></li>
        <li><?= $_GET["penerbit"]; ?></li>
        <li><?= $_GET["volume"] ?></li>
    </ul>

<a href="latihan1.php">Kembali ke data komik</a>
</body>
</html>