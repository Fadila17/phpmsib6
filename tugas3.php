<?php
$m1 = ['nama' => 'Wati Waruwu', 'nim' => '2021001', 'nilai' => 88];
$m2 = ['nama' => 'Astuti Aisyah Salma', 'nim' => '2021002', 'nilai' => 90];
$m3 = ['nama' => 'Rohimah Citra Hadi', 'nim' => '2021003', 'nilai' => 76];
$m4 = ['nama' => 'Yanti Susilawati', 'nim' => '2021004', 'nilai' => 30];
$m5 = ['nama' => 'Juliana Suryana', 'nim' => '2021005', 'nilai' => 60];
$m6 = ['nama' => 'Dedeh Manalu', 'nim' => '2021006', 'nilai' => 82];
$m7 = ['nama' => 'Ati Irawan', 'nim' => '2021007', 'nilai' => 65];
$m8 = ['nama' => 'Budi Santoso', 'nim' => '2021008', 'nilai' => 50];
$m9 = ['nama' => 'Siti Rahayu', 'nim' => '2021009', 'nilai' => 72];
$m10 = ['nama' => 'Hendri Kusuma', 'nim' => '2021010', 'nilai' => 74];

$ar_mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];


$ar_judul = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'GRADE', 'Predikat'];

// Agregat 
$nilai = array_column($ar_mahasiswa,'nilai');
$jumlahnilai = array_sum($nilai); 
$nilaitertinggi = max($nilai);
$nilaiterendah = min($nilai);
$jumlahmahasiswa = count($ar_mahasiswa);
$jumlahnilai = array_sum($nilai); 
$nilairatarata = $jumlahnilai / $jumlahmahasiswa;

$kesimpulan = [
    'Nilai Tertinggi' =>$nilaitertinggi,
    'Nilai Terendah' =>$nilaiterendah,
    'Nilai Rata-rata' =>$nilairatarata,
    'Jumlah Mahasiswa' =>$jumlahmahasiswa,
    'Jumlah Keseluruhan Nilai' =>$jumlahnilai
];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tugas 3 PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-4">
        <h3 align="center">Daftar Nilai Mahasiswa</h3>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <?php
                    foreach ($ar_judul as $judul) { ?>
                        <th><?= $judul ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                $no=1;
                foreach ($ar_mahasiswa as $mahasiswa){
                    $keterangan = ($mahasiswa['nilai'] >= 65) ? "Lulus" : "Gagal";
                    $grade = '';
                        if ($mahasiswa['nilai'] >= 85 && $mahasiswa['nilai'] <= 100) $grade = "A";
                        else if ($mahasiswa['nilai'] >= 75 && $mahasiswa['nilai'] < 85) $grade = "B";
                        else if ($mahasiswa['nilai'] >= 65 && $mahasiswa['nilai'] < 75) $grade = "C";
                        else if ($mahasiswa['nilai'] >= 35 && $mahasiswa['nilai'] < 65) $grade = "D";
                        else if ($mahasiswa['nilai'] >= 0 && $mahasiswa['nilai'] < 35) $grade = "E";
                        else $grade = '';
                    $predikat = '';
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
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $mahasiswa['nama'] ?></td>
                <td><?= $mahasiswa['nim'] ?></td>
                <td><?= $mahasiswa['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
                <?php } ?>
            </tbody>
            <tfoot class="table-group-divider">
            <?php
                foreach($kesimpulan as $kes => $hasil){
                ?>
                <tr>
                    <th class="text-end" colspan="3"><?= $kes ?></th>
                    <th colspan="4"><?= $hasil ?></th>
                </tr>
                
                <?php } ?>
            </tfoot>
        </table>
    </div>
</body>
</html>

<style>
    table, th, td {
        text-align: center;
    }
</style>