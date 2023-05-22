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
    <a href="../kelas/">Kelas</a> |
    <a href=".">Siswa</a>
    <div class="container">
        <div class="row">
            <div class="col-6 h1">Tambah Siswa</div>
            <div class="col-6"><a href="tambah.php" class="btn btn-outline btn-outline-info" style="float:right">Tambah</a></div>
        </div>
        <form action="simpan.php" method="post">
            <div class="mb-2">
                <label for="">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Jenis Kelamin</label>&nbsp;
                <input type="radio" name="gender" value="L" checked>Laki-Laki
                <input type="radio" name="gender" value="L">Perempuan
            </div>
            <div class="mb-2">
                <label for="">Pilih Kelas</label>
                <select name="kelas" class="form-control">
                    <?php
                    include_once('../koneksi.php');
                    $sql = "SELECT id, kelas FROM kelas ORDER BY kelas";
                    $query = mysqli_query($koneksi, $sql);
                    while ($row = mysqli_fetch_assoc($query)) {
                        echo "<option value='$row[id]'>$row[kelas]</option>";
                    } 
                    ?>
            </div>
            <div class="mb-2">
                <input type="reset" class="btn btn-warning btn-sm">&nbsp;
                <input type="submit" value="Simpan" class="btn btn-primary btn-sm" name="simpan">
            </div>
        </form>
    </div>
</body>

</html>