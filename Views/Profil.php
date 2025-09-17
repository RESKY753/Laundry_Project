<?php
session_start(); // Wajib agar bisa akses $_SESSION

include_once '../Models/m_user.php'; // Panggil file class User

// Cek apakah user mengklik tombol logout (via URL ?action=logout)
if (isset($_GET['action']) && $_GET['action'] === 'logout' && isset($_SESSION['username'])) {
    $user = new User(); // Buat objek dari class User
    $user->logout();    // Panggil fungsi logout
    exit;               // Hentikan eksekusi script setelah logout
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil</title>
<link rel="stylesheet" href="../Assets/styleprofil.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- HEADER -->
<div class="header">
  <h2>Profil Saya</h2>
</div>

<!-- FOTO PROFIL -->
<div class="profile-photo">
  <img src="bugatti.jpg">
</div>

<!-- INFO PROFIL -->
<div class="profile-info">
  <div class="info-item">
    <strong>Nama</strong>
    <p><?php echo $_SESSION["nama"]; ?></p>
  </div>
  <div class="info-item">
    <strong>Username</strong>
    <p><?php echo $_SESSION["username"]; ?></p>
  </div>
  <div class="info-item">
   <strong>Role</strong>
    <p><?php echo $_SESSION["role"]; ?></p>
  </div>
  <div class="info-item">
    <strong>ID Outlet</strong>
    <p><?php echo $_SESSION["id_outlet"]; ?></p>
  </div>
</div>

<!-- AKSI -->
<div class="profile-actions">
  <button class="btn-action" onclick="window.location.href='editprofil.php'">
    <i class="fa-solid fa-pen"></i> Edit Profil
  </button>
<!-- Ketika diklik, akan memanggil fungsi JavaScript 'confirmLogout()' -->
<button class="btn-action logout" onclick="confirmLogout()">
  <i class="fa-solid fa-right-from-bracket"></i> Keluar
</button>

<script>
// Fungsi untuk menampilkan konfirmasi logout
function confirmLogout() {
    // Tampilkan kotak dialog konfirmasi
    const konfirmasi = confirm("Anda yakin ingin keluar?");
    
    // Jika user memilih "OK"
    if (konfirmasi) {
        // Arahkan ke URL dengan parameter action=logout
        // Nanti akan ditangani oleh PHP di halaman ini
        window.location.href = '?action=logout';
    }
}
</script>

</div>



<!-- NAVBAR -->
<div class="navbar">
  <a href="Dashboard.php" class="nav-item"><i class="fa-solid fa-house"></i>Home</a>
  <a href="#" class="nav-item"><i class="fa-solid fa-percent"></i>Discount</a>
  <a href="Profil.php" class="nav-item"><i class="fa-solid fa-user"></i>Profil</a>
</div>

</body>
</html>
