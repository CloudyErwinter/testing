<!-- <?php
// variable scope / lingkup variable
$a = 10;

function tampilX() {
    global $a;
    echo $a;
}

tampilX();
?> -->
<!-- <?php
//  SUPERGBLOBALS
// variable global milik PHP
// merupakan Array Associative
var_dump($_SERVER);
echo "<br>";
echo $_SERVER["SERVER_NAME"];
?> -->
<?php
// $_GET
$buku = [
    [
        "judul" => "Naruto",
        "penerbit" => "Shueisha",
        "pengarang" => "Masashi Kishimoto",
        "volume" => "72 volume"
    ],
    [
        "judul" => "Deatte 5-byou de Battle (Game Pertempuran dalam 5 Detik)",
        "penerbit" => "Shogakukan",
        "pengarang" => "Saizō Harawata",
        "volume" => "19 volume (on going)"
    ],
    [
        "judul" => "Horimiya",
        "penerbit" => "	Square Enix",
        "pengarang" => "Hero",
        "volume" => "16 volume"
    ]
]
?>

<!DOCTYPE html>
<head>
        <html lang="en">
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
</head>
<body>Data Buku komik</h1>
<ul>
    <?php foreach( $buku as $k ) :  ?>
        <li>
            <a href="latihan2.php?judul=<?= $k["judul"]; ?>&pengarang=<?= $k["pengarang"]; ?>&penerbit=<?= $k["penerbit"]; ?>&volume=<?= $k["volume"]; ?>"><?= $k["judul"]; ?></a>
    </li>
    <?php endforeach; ?>
</ul>    
</body>
    </html>