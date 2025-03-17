<?php
// src/config.php
$servername = "sql12.freesqldatabase.com";
$username = "sql12768078";
$password = "91f4UCgQjG";
$dbname = "PemWeb1"; //

$koneksi = new mysqli($servername, $username, $password, $dbname);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>