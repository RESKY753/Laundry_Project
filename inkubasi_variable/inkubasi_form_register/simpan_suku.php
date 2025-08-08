<?php
include "../koneksi.php";

$nama_suku = $_POST["nama_suku"];
$deskripsi = $_POST["deskripsi"];
$id_daerah = isset($_POST["id_daerah"]) ? $_POST["id_daerah"] : null; // amankan

// pastikan field "ciri" hanya dipakai kalau memang ada di tabel
// $ciri = $_POST["ciri"];

$query = "INSERT INTO suku (nama_suku, deskripsi, id_daerah) 
          VALUES ('$nama_suku', '$deskripsi', '$id_daerah')";
mysqli_query($koneksi, $query);

echo "Data berhasil disimpan!";
?>
