<?php
$host = "localhost";
$username = "root";
$pass = "";
$db = "db_perpus";
$port = 3306;

$conn = mysqli_connect($host, $username, $pass, $db, $port);

if ($conn->connect_error) {
    die("Koneksi Gagal: ". $koneksi->connect_error);
}

?>