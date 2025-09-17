<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Profil</title>
<link rel="stylesheet" href="../Assets/style_edit_profil.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<!-- HEADER -->
<div class="header">
  <h2>Edit Profil</h2>
</div>

<!-- FORM EDIT PROFIL -->
<div class="edit-profile">
  <form action="update_profil.php" method="post">
    <div class="form-group">
      <label for="nama"><i class="fa-solid fa-user"></i> Nama</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required>
    </div>

    <div class="form-group">
      <label for="email"><i class="fa-solid fa-envelope"></i> Email</label>
      <input type="email" id="email" name="email" placeholder="Masukkan email" required>
    </div>

    <div class="form-group">
      <label for="telepon"><i class="fa-solid fa-phone"></i> Telepon</label>
      <input type="text" id="telepon" name="telepon" placeholder="Masukkan nomor telepon" required>
    </div>

    <div class="form-group">
      <label for="alamat"><i class="fa-solid fa-location-dot"></i> Alamat</label>
      <textarea id="alamat" name="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
    </div>

    <div class="form-actions">
      <button type="submit" class="btn-action save"><i class="fa-solid fa-save"></i> Simpan</button>
      <a href="Profil.php" class="btn-action cancel"><i class="fa-solid fa-xmark"></i> Batal</a>
    </div>
  </form>
</div>

</body>
</html>