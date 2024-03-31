<?php
$siswa = [
    ["Cloudy ErWinter", "08990985287", "Rekayasa Perangkat Lunak", "Bluewinter@gmail.com"],
    ["BlueWinter", "08990985576", "Multimedia", "Silverkin@gmail.com"], 
    ["Silvia", "08990897542", "Multimedia", "silviA@gmail.com"]
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
    <li>Nama = <?= $s[0]?></li>
    <li>No.HP = <?= $s[1]?></li>
    <li>Jurusan = <?= $s[2]?></li>
    <li>Email = <?= $s[3]?></li>
</ul>
<?php endforeach; ?>

</body>
</html>