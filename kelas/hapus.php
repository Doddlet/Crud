<?php
// cek apakah submit berasal dari form atau bukan 
if (isset($_GET['id'])) {
    include_once('../koneksi.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM kelas WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location: index.php");
    } else {
        include "index.php";
        echo "<script language='Javascript'>";
        echo "alert('Data Gagal Dihapus')";
        echo "</script>";
    }
    
} else {
    echo "JANGAN akses langsung kemari, cek melalui <a href='.'>form</a>";
}

?>