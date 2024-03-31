<?php 
// array
// variable yang dapa memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0
 
// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara lama
$bulan = ["Januari", "February", "Maret"];
$arrl = [123, "tulisan", false]; 

// Menampilkan Array
// var_dump() / print_r()
// var_dump($arrl);
// echo "<br>";
// print_r($bulan);

// menampilkan 1 element pada array
// echo "<br>";
// echo $hari[2];


// menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

?>