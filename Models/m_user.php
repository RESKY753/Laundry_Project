<?php
include_once '../Controllers/c_koneksi.php';
class user
{

         function tambah_user($id, $nama, $username, $password, $role)
    {
        $conn = new koneksi();
        $sql = "INSERT INTO tb_user VALUES ('$id', '$nama', '$username', '$password', '$role')";
        $query = mysqli_connect($conn->koneksi, $sql);

        if ($query) {
           echo "<script>alert('Data Berhasil Ditambahkan');window.location='../views/dashboard.php'</script>";
        } else {
            echo "<script>alert('Data Gagal Ditambahkan');window.location='../views/form.php'</script>";
        }
    }
        
        function logout()
    {
    // Cek apakah session sudah dimulai, jika belum maka mulai session
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); // Mulai session untuk bisa menghancurkannya
    }

    // Hancurkan semua data session (logout user)
    session_destroy(); // Menghapus seluruh data session pengguna saat ini

    // Tampilkan notifikasi logout berhasil (menggunakan JavaScript)
    // Setelah itu redirect ke halaman login (../index.php)
    echo "<script>
        alert('Anda berhasil logout'); // Menampilkan popup pesan
        window.location.href = '../index.php'; // Arahkan pengguna ke halaman login
    </script>";

    // Menghentikan eksekusi script PHP setelah logout dan redirect
    exit;
    }

    function hapus_data($id)
    {
        $conn = new koneksi();
        $sql = "DELETE FROM tb_user WHERE id='$id'";
            $query = mysqli_connect($conn->koneksi, $sql);
    
            if ($query) {
                echo "<script>alert('Data Berhasil Dihapus');window.location='../views/dashboard.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Dihapus');window.location='../views/form.php'</script>";
            }
        }

        function edit_data($id)
        {
         $conn = new koneksi();
         $sql = "UPDATE tb_user SET nama='$nama', username='$username', password='$password', role='$role' WHERE id='$id'";
         $query = mysqli_connect($conn->koneksi, $sql);

         if ($query) {
            echo "<script>alert('Data Berhasil Diubah');window.location='../views/dashboard.php'</script>";
         } else {
            echo "<script>alert('Data Gagal Diubah');window.location='../views/form.php'</script>";
         }
        }

        function tampil_data_byid($id)
    {
        $conn = new koneksi();
        $sql = "SELECT * FROM tb_user WHERE id_user = '$id'";
        $query = mysqli_connect($conn->koneksi, $sql);

        if ($query->num_rows > 0) {
            
            while ($data = mysqli_fetch_array($query)) {
                $result[] = $data;
            }
            return $result;
        } else {
            echo "Data tidak ditemukan !";
        }
    }
}

?>