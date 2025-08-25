<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION["id"])) {
    header("Location: ../index.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>UI Aplikasi Laundry</title>
<link rel="stylesheet" href="../Assets/styledashboard.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- HEADER -->
<div class="header">
  <h2>Selamat Datang, <?php echo $_SESSION["nama"]; ?> 👋</h2>
  <p>Bersihkan pakaian Anda dengan mudah</p>
</div>

<!-- SLIDER BARU -->
<div class="slider-container">
  <div class="slider-track" id="slider-track">
      <div class="slider-item">
          <img src="https://placehold.co/800x450/3498db/ffffff?text=Promo+A" alt="Promo A">
      </div>
      <div class="slider-item">
          <img src="https://placehold.co/800x450/2ecc71/ffffff?text=Diskon+20%25" alt="Diskon 20%">
      </div>
      <div class="slider-item">
          <img src="https://placehold.co/800x450/e74c3c/ffffff?text=Gratis+Antar" alt="Gratis Antar">
      </div>
      <div class="slider-item">
          <img src="https://placehold.co/800x450/f1c40f/ffffff?text=Promo+Akhir+Bulan" alt="Promo Akhir Bulan">
      </div>
  </div>

  <div class="slider-nav">
      <button id="prevBtn"><i class="fa-solid fa-angle-left"></i></button>
      <button id="nextBtn"><i class="fa-solid fa-angle-right"></i></button>
  </div>
</div>

<!-- SALDO / POIN -->
<div class="saldo-card">
  <div>
    <p>Saldo</p>
    <h3>Rp 150.000</h3>
  </div>
  <div>
    <p>Poin</p>
    <h3>120</h3>
  </div>
</div>

<!-- MENU LAYANAN -->
<div class="menu-grid">
  <a href="#" class="menu-item">
    <i class="fa-solid fa-weight-scale"></i>
    <p>Cuci Kiloan</p>
  </a>
  <a href="#" class="menu-item">
    <i class="fa-solid fa-shirt"></i>
    <p>Cuci Satuan</p>
  </a>
  <a href="#" class="menu-item">
    <i class="fa-solid fa-bolt"></i>
    <p>Cuci Ekspres</p>
  </a>
  <a href="#" class="menu-item">
    <i class="fa-solid fa-truck"></i>
    <p>Antar Jemput</p>
  </a>
  <a href="#" class="menu-item">
    <i class="fa-solid fa-fire"></i>
    <p>Setrika</p>
  </a>
  <a href="#" class="menu-item">
    <i class="fa-solid fa-box"></i>
    <p>Paket Hemat</p>
  </a>
</div>

<!-- DAFTAR PESANAN -->
<div class="order-list">
  <h3>Pesanan Terbaru</h3>
  <div class="order-item">
    <strong>Setrika</strong>
    <span> - 5kg | Status: Proses</span>
  </div>
  <div class="order-item">
    <strong>Paket Hemat</strong>
    <span> - 3kg | Status: Selesai</span>
  </div>
</div>

<!-- NAVBAR -->
<div class="navbar">
  <a href="Dashboard.php" class="nav-item"><i class="fa-solid fa-house"></i>Home</a>
  <a href="#" class="nav-item"><i class="fa-solid fa-percent"></i>Discount</a>
  <a href="Profil.php" class="nav-item"><i class="fa-solid fa-user"></i>Profil</a>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const sliderTrack = document.getElementById('slider-track');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const totalItems = sliderTrack.children.length;
        let currentIndex = 0;
        let intervalId;

        function moveSlider(index) {
             sliderTrack.style.transform = `translateX(-${(100 / totalItems) * index}%)`;
        }
        
        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalItems;
            moveSlider(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalItems) % totalItems;
            moveSlider(currentIndex);
        }

        nextBtn.addEventListener('click', () => {
            clearInterval(intervalId);
            nextSlide();
            startAutoSlide();
        });
        
        prevBtn.addEventListener('click', () => {
            clearInterval(intervalId);
            prevSlide();
            startAutoSlide();
        });

        function startAutoSlide() {
            intervalId = setInterval(nextSlide, 5000);
        }

        startAutoSlide();
    });
</script>

</body>
</html>