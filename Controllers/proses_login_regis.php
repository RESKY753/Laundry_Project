<?php
session_start();
include "template/koneksi.php";

if (isset($_POST["register"])) {
    // Proses registrasi
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $email    = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' OR username='$username'");
    if (mysqli_num_rows($check) > 0) {
        echo "<script>alert('Username atau email sudah terdaftar!'); window.location.href='index.html';</script>";
    } else {
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location.href='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}

if (isset($_POST["login"])) {
    // Proses login
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            $_SESSION["username"] = $row["username"];
            echo "<script>alert('Login berhasil!'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Password salah!'); window.location.href='index.html';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location.href='index.html';</script>";
    }
}
?>
