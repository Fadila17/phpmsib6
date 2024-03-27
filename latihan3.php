<?php
$siswa = 'Budi santoso';
$matakuliah = 'PHP';
$nilai = '90'; // Nilai yang di input

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


echo $siswa;
echo $matakuliah;
echo $nilai;
echo $ket;
echo $grade;
echo $predikat;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>

<body>
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
            <td><?= $siswa ?></td>
            <td><?= $matakuliah ?></td>
            <td><?= $nilai ?></td>
            <td><?= $ket ?></td>
            <td><?= $grade ?></td>
            <td><?= $predikat ?></td>
        </tr>
    </Table>
</body>

</html>

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
<!--
Nama Mahasiswa: budi Santoso    => Variable
Mata Kuliah   : PHP             => Variable
Nilai         : 80              => Variable input
Keterangan    : Lulus           => Ternary
Grade         : B               => IF/ELSE
Predikan      : Bagus           => SWITCH/CASE
-->