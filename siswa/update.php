<?php

if (isset($_POST['update'])) {
    include_once('../koneksi.php');
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];  
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "UPDATE kelas SET kelas='$kelas', kapasitas='$kapasitas', terisi='$terisi' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header("location: index.php");
    } else {
        include "edit.php?id='$id'";
        echo "<script language='Javascript'>";
        echo "alert('Data Gagal Diubah')";
        echo "</script>";
    }
    
} else {
    echo "JANGAN akses langsung kemari, cek melalui <a href='.'>form</a>";
}

?>