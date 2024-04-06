<?php
// sertakan file subclass
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'Staff.php';

// ciptakan objek
$d1 = new Dosen('Budi', 'L', '111', 'S.Kom., M.Kom');
$d2 = new Dosen('Dani', 'L', '222', 'S.pd., M.pd');
$m1 = new Mahasiswa('Deden', 'L', '6', 'SI');
$m2 = new Mahasiswa('Nia', 'P', '4', 'Akuntansi');
$s1 = new Staff ('Mia', 'P', '1111', 'Marketing', '1000000');
$s2 = new Staff ('Randy', 'L', '1112', 'Marketing', '1500000');
$s3 = new Staff ('Bayu', 'L', '1113', 'Marketing', '2000000');

// deklarasi objek
$data = [$d1, $d2, $m1, $m2, $s1, $s2, $s3];

// cetak dengan foreach
foreach($data as $d){
    echo $d->cetak();
}

?>