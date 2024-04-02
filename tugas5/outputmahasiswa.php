
<?php
require_once 'mahasiswa.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$kuliah = $_POST['kuliah'];
$matakuliah = $_POST['matakuliah'];
$nilai = $_POST['nilai'];

$ns1 = new Mahasiswa($nim, $nama, $kuliah, $matakuliah, $nilai);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Nilai Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="mt-5 mb-3">
        <a href="inputmahasiswa.php"><button name="back" type="button" class="btn btn-primary">Back</button></a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kuliah</th>
                    <th>Matakuliah</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                echo '<td>' . $ns1->nim . '</td>';
                echo '<td>' . $ns1->nama . '</td>';
                echo '<td>' . ucwords($ns1->kuliah) . '</td>';
                echo '<td>' . strtoupper($ns1->matakuliah) . '</td>';
                echo '<td>' . $ns1->nilai    . '</td>';
                echo '<td>' . $ns1->grade() . '</td>';
                echo '<td>' . $ns1->predikat() . '</td>';
                echo '<td>' . $ns1->status() . '</td>';
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>