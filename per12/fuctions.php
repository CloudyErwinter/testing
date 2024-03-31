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



function tambah($data) {
    global $db;
    // 
    $jdl = htmlspecialchars($data["judul"]);
    $pnb = htmlspecialchars($data["penerbit"]);
    $png = htmlspecialchars($data["pengarang"]);
    $chp = htmlspecialchars($data["chapter"]);
    $gnr = htmlspecialchars($data["genre"]);
    $gnb = htmlspecialchars($data["sampul"]);

    //
    $query = "INSERT INTO data_comic
                VALUE
                ('0', '$jdl', '$pnb', '$png', '$chp', '$gnr', '$gnb')
                ";
    mysqli_query($db ,$query); 

    return mysqli_affected_rows($db);
}

function hapus($id) {
    var_dump($id);
    global $db;
    mysqli_query($db, "DELETE FROM data_comic WHERE id_buku = $id");

    return mysqli_affected_rows($db);
}
function ubah($data) {
    global $db;
    // 
    $id = $data["id"];
    $jdl = htmlspecialchars($data["judul"]);
    $pnb = htmlspecialchars($data["penerbit"]);
    $png = htmlspecialchars($data["pengarang"]);
    $chp = htmlspecialchars($data["chapter"]);
    $gnr = htmlspecialchars($data["genre"]);
    $gnb = htmlspecialchars($data["sampul"]);

    //
    $query = "UPDATE data_comic SET
                judul = '$jdl',
                penerbit = '$pnb',
                pengarang = '$png',
                chapter = '$chp',
                genre = '$gnr'
             WHERE id_buku = '$id'
                ";
    mysqli_query($db ,$query);

    return mysqli_affected_rows($db);
}
function find($keyword) {
    $query = "SELECT * FROM data_comic
                WHERE
              judul LIKE '%$keyword%' OR
              pengarang LIKE '%$keyword%' OR
              penerbit LIKE '%$keyword%' OR
              genre LIKE '%$keyword%'
              ";
    return query($query); 
}

?>