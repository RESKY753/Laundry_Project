<?php
$server = "localhost"; // Nama server
$username = "root";
$pass = "";
$DataBase = "inkubasi"; // Nama database di phpMyAdmin

$con = mysqli_connect($server, $username, $pass, $DataBase);

// Cek koneksi
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo "Koneksi berhasil";
}
?>
