<?php
/*
FUNGSI IF
JIKA UMUR LEBIH DARI 20 TAHUN, MAKA ANDA DAPAT MENGENDARAI MOBIL (IF)
JIKA UMUR LEBIH DARI 20 TAHUN, MAKA ANDA DAPAT MENGENDARAI MOTOR (ELSE IF)
JIKA UMUR LEBIH DARI 20 TAHUN, MAKA ANDA DAPAT MENGENDARAI SEPEEDA (ELSE IF)
SELAIN ITU TIDAK BOLEH (ELSE)
*/

$umur = 18; // ubah umur
if($umur > 20){
    echo "Selamat Kamu dapat mengendarai mobil";
}
else if($umur > 17){
    echo " Selamat kamu dapat mengendarai motor";
}
else if($umur > 10){
    echo "Selamat kamu dapat mengendarai sepeda";
}
else {
    echo "Kamu dilarang mengendarai apapun";
}

echo '<hr>';

/*
Jika umur <40 dan umur >=17 ket: dewasa
Jika umur <17 dan umur >=9 ket: remaja
Jika umur <9 dan umur >5 ket: anak-anak
Jika umur <=5 dan umur >0 ket: balita
selain itu umur > 40: tua
*/
$umur = 8;
if ($umur < 40 && $umur >= 17) {
    $ket = 'Dewasa';
} elseif ($umur < 17 && $umur >= 9) {
    $ket = 'Remaja';
} elseif ($umur < 9 && $umur > 5) {
    $ket = 'Anak - Anak';
} elseif ($umur <= 5 && $umur > 0) {
    $ket = 'Balita';
} else {
    $ket = 'Orang Tua';
}
echo "Nama Saya Fad, saya berumur $umur tahun, dan saya adalah $ket";

echo '<hr>';

/*
Soal:
Jika niali > 6, maka nilai bagus
selain itu buruk
*/

$nilai=8;
// cara if
if($nilai>6){
    echo "Baik";
}else echo "Buruk";

echo '<hr>';

// cara ternary
echo $nilai>6 ? "Baik" : "Buruk";

echo '<hr>';
$nilai = 7; // Ubah nilai sesuai kebutuhan
$status_nilai = ($nilai > 6) ? "Baik" : "Buruk";
echo "Nilai: $nilai<br>";
echo "Status Nilai: $status_nilai";



?>