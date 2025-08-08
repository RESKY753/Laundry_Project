<?php
include 'koneksi.php';

// Ambil nilai dari inputan
$nama_daerah = $_POST['nama_daerah'] ?? '';

if (empty($nama_daerah)) {
    die("❌ Nama daerah tidak boleh kosong.");
}

// Simpan ke database
$sql = "INSERT INTO daerah (nama_daerah) VALUES ('$nama_daerah')";
$query = mysqli_query($con, $sql);

if ($query) {
    echo "✅ Data daerah berhasil disimpan.<br>";
    echo "<a href='form_tambah_daerah.php'>Tambah Lagi</a>";
} else {
    echo "❌ Gagal menyimpan: " . mysqli_error($con);
}
?>
