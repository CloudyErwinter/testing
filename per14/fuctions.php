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

    // apload gambar
    $gmb = upload();
    if( !$gmb ) {
        return false;
    }

    //
    $query = "INSERT INTO data_comic
                VALUE
                ('0', '$jdl', '$pnb', '$png', '$chp', '$gnr', '$gmb')
                ";
    mysqli_query($db ,$query); 

    return mysqli_affected_rows($db);
}

function upload() {
    global $db;
    $namaF = $_FILES['sampul']['name'];
    $ukuranF = $_FILES['sampul']['size'];
    $error = $_FILES['sampul']['error'];
    $tmpName = $_FILES['sampul']['tmp_name'];

    // cek apakah tidak ada gambar yang diapload
    if( $error === 4 ) {
        echo "<script>
                alert('choose files first!');
            </script>";
        return false;
    }

    // cek apakah yang di apload hanya gambar
    $ekstensigmbv = ['jpg', 'jpeg', 'png'];
    $eksgmb = explode('.', $namaF);
    $eksgmb = strtolower(end($ekstensigmbv));
    if( !in_array($eksgmb, $ekstensigmbv) ) {
        echo "<script>
                alert('The file you choose is not image!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranF > 1000000 ) {
        echo "<script>
                alert('The image you choose is too big!');
        </script>";
        return false;
    }
    
    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFB = uniqid();
    $namaFB .= '.';
    $namaFB .= $eksgmb;
    
    move_uploaded_file($tmpName, 'img/' . $namaFB);

    return $namaFB;

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
    $gmbL = $data["gambarL"];

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['sampul']['error'] === 4 ) {
        $gmb = $gmbL;
    } else {
        $gmb = upload();
    }


    //
    $query = "UPDATE data_comic SET
                judul = '$jdl',
                penerbit = '$pnb',
                pengarang = '$png',
                chapter = '$chp',
                genre = '$gnr',
                sampul = '$gmb'
            WHERE 
            id_buku = '$id'
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

function registrasion($data) {
    global $db;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($db, $data["password"]);
    $password2 = mysqli_real_escape_string($db, $data["password2"]);

    // cek username udh ada atau belum
    $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
        alert('username has been used!')</script>";
        return false;
    }

    if( $password !== $password2 ) {
        echo "<script>
        alert('Confirm password is not the same!');
        </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($db, "INSERT INTO users VALUE('0', '$username', '$password')");

    return mysqli_affected_rows($db);
}
?>