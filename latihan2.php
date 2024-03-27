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

echo '<hr>';

$baju='L'; // Ukuran baju
switch ($baju) {
    case 'l':
    case 'L':
        echo "Large";
        break;
    case 'M' && 'm':
        echo "Medium";
        break;
    default:
        echo "Small";
        break;
}

/*
$baju = 'm';
$baju = strtolower($baju);
switch ($baju) {
    case "l":
        echo "Large";
        break;
    case "m":
        echo "Medium";
        break;
    default:
        echo "Small";
}
*/

echo '<hr>';

$nilai='90';
switch ($nilai){
    case $nilai === 0:
        echo "$nilai: Nilai Buruk";
        break;
    case $nilai <= 40:
        echo "$nilai: Nilai Kurang";
        break;
    case $nilai <=70:
        echo "$nilai: Nilai Cukup";
        break;
    case $nilai <=80:
        echo "$nilai: Nilai Memuaskan";
        break;
    case $nilai <=100:
        echo "$nilai: Nilai Sangat Memuaskan";
        break;
    default: 
        echo "null";
}

echo '<hr>';

$nilai2='88';
switch ($nilai2) {
    case $nilai2 >=0 && $nilai2 <35:
        echo "$nilai2: E";
        break;
    case $nilai2 >=35 && $nilai2 <60:
        echo "$nilai2: D";
        break;
    case $nilai2 >=60 && $nilai2 <75:
        echo "$nilai2: C";
        break;
    case $nilai2 >=75 && $nilai2 <85:
        echo "$nilai2: B";
        break;
    case $nilai2 >=85 && $nilai2 <100:
        echo "$nilai2: A";
        break;
    default:
        echo "null";
}

echo '<hr>';



?>