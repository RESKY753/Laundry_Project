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
        
        function logout ()
        {
            session_start();
            session_destroy();
            header("Location: ../index.php");
        }
       
        function hapus_data()
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

        function edit_data()
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