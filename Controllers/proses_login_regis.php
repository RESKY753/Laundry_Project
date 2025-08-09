<?php
session_start();
include_once "../Controllers/template/koneksi.php"; 

// ======================= PROSES REGISTER =======================
if (isset($_POST["register"])) {
    $nama      = mysqli_real_escape_string($conn, $_POST["nama"]);
    $username  = mysqli_real_escape_string($conn, $_POST["username"]);
    $password  = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $id_outlet = (int) $_POST["id_outlet"];
    $role      = mysqli_real_escape_string($conn, $_POST["role"]);

    // Cek apakah username sudah ada
    $check = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
    if (mysqli_num_rows($check) > 0) {
        echo " <script>window.location.href='../Views/index.php';</script>";
        exit;
    }

    // Simpan data
    $query = "INSERT INTO tb_user (nama, username, password, id_outlet, role) 
              VALUES ('$nama', '$username', '$password', '$id_outlet', '$role')";
    if (mysqli_query($conn, $query)) {
        echo "<script>window.location.href='../Views/index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// ======================= PROSES LOGIN =======================
if (isset($_POST["login"])) {

    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username'");
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            // Simpan sesi user
            $_SESSION["id"]       = $row["id"];
            $_SESSION["nama"]     = $row["nama"];
            $_SESSION["username"] = $row["username"];
            $_SESSION["role"]     = $row["role"];
            $_SESSION["id_outlet"]= $row["id_outlet"];

            echo "<script>alert('Login berhasil!'); window.location.href='../Views/dashboard.php';</script>";
        } else {
            echo "<script>alert('Password salah!'); window.location.href='../Views/index.php';</script>";
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!'); window.location.href='../Views/index.php';</script>";
    }
}
?>
