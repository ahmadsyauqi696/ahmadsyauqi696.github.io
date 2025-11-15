<?php
$host = "localhost";
$user = "root";    // ganti sesuai user mysql kamu
$pass = "";        // ganti sesuai password mysql kamu
$db   = "seavida_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>

