<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_registration_week07";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>