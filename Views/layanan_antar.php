<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Layanan Antar Jemput - LaundryKu</title>
  <link rel="stylesheet" href="../Assets/style_antar.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
  <div class="form-container">
    <h2><i class="fa-solid fa-truck"></i> Antar Jemput</h2>
    <form action="prosesAntarJemput.php" method="POST">
      
      <div class="form-group">
        <label for="nama">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
      </div>

      <div class="form-group">
        <label for="alamat">Alamat Lengkap</label>
        <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat jemput" required></textarea>
      </div>

      <div class="form-group">
        <label for="hp">Nomor HP</label>
        <input type="tel" id="hp" name="hp" placeholder="08xxxxxxxxxx" required>
      </div>

      <div class="form-group">
        <label for="tanggal">Tanggal Jemput</label>
        <input type="date" id="tanggal" name="tanggal" required>
      </div>

      <div class="form-group">
        <label for="catatan">Catatan Tambahan</label>
        <textarea id="catatan" name="catatan" rows="2" placeholder="(Opsional) Contoh: jemput sore hari"></textarea>
      </div>

      <button type="submit" class="btn-submit">Pesan Jemput</button>
    </form>
  </div>

  <div class="navbar">
  <a href="Dashboard.php" class="nav-item"><i class="fa-solid fa-house"></i>Home</a>
  <a href="Diskon.php" class="nav-item"><i class="fa-solid fa-percent"></i>Discount</a>
  <a href="Profil.php" class="nav-item"><i class="fa-solid fa-user"></i>Profil</a>
  </div>

</body>
</html>