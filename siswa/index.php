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
    <a href="../kelas">Kelas</a> |
    <a href="siswa">Siswa</a>
    <div class="container">
    <div class="row">
        <div class="col-6 h1">Data Siswa</div>
        <div class="col-6"><a href="tambah.php" class="btn btn-primary" style="float:right">Tambah</a></div>
    </div>
    </div>
    <table class="table table-striped table-bordered"></div>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Kelas</th>
                <th>Pilihan</th>
            </tr>
        </thead>
        <?php
        include('../koneksi.php');
        $sql = "SELECT kelas.id as kid, kelas.kelas, siswa.id as sid, siswa.nama, siswa.gender, siswa.kelas_id, siswa.asalsekolah, siswa.tempatlahir, siswa.tanggallahir FROM siswa JOIN kelas ON kelas.id=siswa.kelas_id ";
        $query = mysqli_query($koneksi, $sql);
        echo "<tbody>";
        if (mysqli_num_rows($query)== 0) {
            echo "<td colspan='8' align='center'>Data Kosong</td>";
        } else {
            $no = 1;
            while ($r = mysqli_fetch_assoc($query)) {
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>" . $r['nama'] . "</td>";
                echo "<td>" . $r['gender'] . "</td>";
                echo "<td>" . $r['kelas'] . "</td>";
                echo "<td>" . $r['asalsekolah'] . "</td>";
                echo "<td>" . $r['tempatlahir'] . "</td>";
                echo "<td>" . $r['tanggallahir'] . "</td>";
                echo '<td><a href="edit.php?id='.$r['id'].'" class="btn btn-warning btn-sm">Edit</a> |

                <a href="hapus.php?id='.$r['id'].'" onclick="returnconfirm(Yakin Akan Dihapus?)" class="btn btn-danger btn-sm">Hapus</a></td>';
                echo "</tr>";
                $no++;
            }
        }
        
        ?>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
