<?php
include "koneksi.php"
$username = $_REQUEST['username'];
$alamat = $_REQUEST['alamat'];
$no_tlp = $_REQUEST['no_tlp'];
$email = $_REQUEST['email'];

$mysqli = "INSERT INTO db_ronamanik(username, alamat, no_tlp, email)
        values('$username', '$alamat', '$no_tlp', '$email')";

$result = mysqli_query($conn, $mysqli);

if ($result) {
    echo "Data yang berhasil disimpan";
} else {
    echo "Data gagal disimpan";
}

mysqli_close($conn);
?>