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
            <div class="col-6 h1">Tambah Kelas</div>
            <div class="col-6"><a href="tambah.php" class="btn btn-outline btn-outline-info" style="float:right">Tambah</a></div>
        </div>
        <form action="simpan.php" method="post">
            <div class="mb-2">
                <label for="">Nama Kelas</label>
                <input type="text" name="kelas" class="form-control" required>
            </div>
            <div class="mb-2">
                <label for="">Kapasitas Kelas</label>
                <input type="number" name="kapasitas" class="form-control" required> 
            </div>
            <div class="mb-2">
                <label for="">Jumlah Siswa</label>
                <input type="number" name="terisi" class="form-control" required> 
            </div>
            <div class="mb-2">
                <input type="reset" class="btn btn-warning btn-sm">&nbsp;
                <input type="submit" value="Simpan" class="btn btn-primary btn-sm" name="simpan">
            </div>
        </form>
    </div>
</body>

</html>