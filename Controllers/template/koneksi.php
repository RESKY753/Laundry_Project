<?php
$server = "localhost";
$username = "root";
$password = "";
$DataBase = "laundry";
// Koneksi ke database
// $conn = new mysqli($server,$username,$password,$DataBase,3307);
$conn = new mysqli($server,$username,$password,$DataBase);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}else{
    echo "<h1>Koneksi berhasil</h1>";
}

?>