<?php
// koneksi ke database
$db = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while( $bk = mysqli_fetch_assoc($result) ) {
        $rows[] = $bk; 
    }
    return $rows;
}
?>