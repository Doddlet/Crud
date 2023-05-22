<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <a href="../">Home</a> |
    <a href="kelas">Kelas</a> |
    <a href="../siswa">Siswa</a>
    <div class="container">
        <div class="row">
            <div class="col-6 h1">Edit Kelas</div>
            <div class="col-6"><a href="tambah.php" class="btn btn-outline btn-outline-info" style="float:right">Tambah</a></div>
        </div>
        <?php
        // Terima Umpan Dari GET pada file index.php
        $id = $_GET['id'];
        // panggil koneksi
        require_once("../koneksi.php");
        // cari data kelas berdasarkan id umpan GET
        $sql = "SELECT * FROM kelas WHERE id='$id'";
        $query = mysqli_query($koneksi, $sql);
        $r = mysqli_fetch_assoc($query);
        //$r = mysqli_fetch_array($query);
        ?>
        <form action="update.php" method="post">
            <div class="mb-2">
                <label for="">Nama Kelas</label>
                <input type="text" name="kelas" value="<?= $r['kelas']; ?>" class="form-control" required>  
            </div>
            <div class="mb-2">
                <label for="">Kapasitas Kelas</label>
                <input type="number" name="kapasitas" value="<?= $r['kapasitas']; ?>" class="form-control" required> 
            </div>
            <div class="mb-2">
                <label for="">Jumlah Siswa</label>
                <input type="number" name="terisi" value="<?= $r['terisi']; ?>" class="form-control" required> 
            </div>
            <input type="hidden" name="id" value="<?= $r['terisi']; ?>">
            <div class="mb-2">
                <input type="reset" class="btn btn-warning btn-sm">&nbsp;
                <input type="submit" value="Update" class="btn btn-primary btn-sm" name="update">
            </div>
        </form>
    </div>
</body>

</html>
