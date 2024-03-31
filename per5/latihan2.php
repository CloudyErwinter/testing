<?php
// $siswa = [
//     ["Cloudy ErWinter", "08990985287", "Rekayasa Perangkat Lunak", "Bluewinter@gmail.com"],
//     ["BlueWinter", "08990985576", "Multimedia", "Silverkin@gmail.com"], 
//     ["Silvia", "08990897542", "Multimedia", "silviA@gmail.com"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$siswa = [
    [
    "nama" => "Cloudy ErWinter",
    "no.hp" => "08990985287",
    "jurusan" => "Rekayasa Perangkat Lunak",
    "email" => "Bluewinter@gmail.com",
    "gambar" => "TENMA TSUKASA!!.jpg"
    ],
    [
    "nama" => "BlueWinter",
    "no.hp" => "08990985576",
    "jurusan" => "Multimedia",
    "email" => "Silverkin@gmail.com",
    "gambar" => "Nene.png"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>

    <h1>Daftar Siswa</h1> 
 <?php foreach( $siswa as $s ) : ?>
<ul>
    <li>
        <img src="img/<?= $s["gambar"]; ?>">
    </li>
    <li>Nama = <?= $s["nama"]?></li>
    <li>No.HP = <?= $s["no.hp"]?></li>
    <li>Jurusan = <?= $s["jurusan"]?></li>
    <li>Email = <?= $s["email"]?></li>

</ul>
<?php endforeach; ?>

</body>
</html>