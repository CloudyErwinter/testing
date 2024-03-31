<?php
$buku = [
    [
        "judul" => "Naruto",
        "penerbit" => "Shueisha",
        "pengarang" => "Masashi Kishimoto",
        "volume" => "72 volume"
    ],
    [
        "judul" => "Deatte 5-byou de Battle (
        Game Pertempuran dalam 5 Detik)",
        "penerbit" => "Shogakukan",
        "pengarang" => "Saizō Harawata",
        "volume" => "19 volume (on going)"
    ],
    [
        "judul" => "Horimiya",
        "penerbit" => "Square Enix",
        "pengarang" => "Hero",
        "volume" => "16 volume"
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Data Buku Komik</title>
</head>
<body>
    
<h1>Daftar Buku Komik</h1> 
 <?php foreach( $buku as $b ) : ?>
<ul>
    <li>Judul = <?= $b["judul"]?></li>
    <li>Pengarang = <?= $b["pengarang"]?></li>
    <li>Penerbit = <?= $b["penerbit"]?></li>
    <li>Volume Buku = <?= $b["volume"]?></li>

</ul>
<?php endforeach; ?>
</body>
</html>
