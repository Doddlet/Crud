<?php
// cek apakah submit berasal dari form atau bukan 
if (isset($_POST['simpan'])) {
    include_once('../koneksi.php');
    $kelas = $_POST['kelas'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location: index.php");
    } else {
        include "create.php";
        echo "<script language='Javascript'>";
        echo "alert('Data Gagal Ditambahkan')";
        echo "</script>";
    }
    
} else {
    echo "JANGAN akses langsung kemari, cek melalui <a href='index.php'>form</a>";
}

?>