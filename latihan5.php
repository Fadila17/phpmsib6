<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Input Nilai</h1>
<form action="latihan5.php" method="POST">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">--- Pilihan Mata Kuliah</option>
        <option value="html">HTML & CSS</option>
        <option value="uiux">UI/UX</option>
        <option value="php">PHP</option>
        <option value="laravel">Laravel</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
    <div class="col-8">
      <input id="nilai" name="nilai" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>



<?php
$nama = $_POST['nama'];
$matakuliah = $_POST['matkul'];
$nilai =$_POST['nilai'];
$proses =$_POST['proses'];


// Ternary 
$ket = ($nilai >= 60) ? "Lulus" : "Gagal";

// IF
if ($nilai >= 85 && $nilai <= 100) $grade = 'A';
else if ($nilai >= 75 && $nilai <= 85) $grade = 'B';
else if ($nilai >= 60 && $nilai <= 75) $grade = 'C';
else if ($nilai >= 35 && $nilai <= 60) $grade = 'D';
else if ($nilai >= 0 && $nilai <= 35) $grade = 'E';
else $grade = '';


// SWITCHCASE
switch ($grade) {
    case 'A':
        $predikat = 'Memuaskan';
        break;
    case 'B':
        $predikat = 'Baik';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Buruk';
        break;
}


if(isset($proses)){ // Sebagai pencegah error handling
/*
echo $siswa;
echo $matakuliah;
echo $nilai;
echo $ket;
echo $grade;
echo $predikat;
*/

?>

<Table>
    <tr>
        <th>Nama Mahasiswa</th>
        <th>Mata Kuliah</th>
        <th>Nilai</th>
        <th>Keterangan</th>
        <th>Grade</th>
        <th>Predikat</th>
    </tr>
    <tr>
        <td><?= $nama ?></td>
        <td><?= $matakuliah ?></td>
        <td><?= $nilai ?></td>
        <td><?= $ket ?></td>
        <td><?= $grade ?></td>
        <td><?= $predikat ?></td>
    </tr>
</Table>

<style>
    table,
    td,
    th {
        border: 1px solid;
        border-spacing: 0;
        font-size: x-large;
    }

    table {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>


<?php } ?>
<!--
Nama Mahasiswa: budi Santoso    => Variable
Mata Kuliah   : PHP             => Variable
Nilai         : 80              => Variable input
Keterangan    : Lulus           => Ternary
Grade         : B               => IF/ELSE
Predikan      : Bagus           => SWITCH/CASE
-->