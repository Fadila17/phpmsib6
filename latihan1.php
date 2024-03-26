<?php
// variable

// ini contoh komentar di php

/*
komentar1
komentar2
komentar3
komentar4
*/

// cetak
echo 'Belajar PHP <br>';
echo '<br>';
echo 'Saya Senang Belajar "PHP"';
echo '<br>';
print "Belajar \"MySQL\"";
echo '<br>';
echo '<hr>';

// variable user
$nama="Dono Warkop"; // data string
$alamat="Bogor"; // data string
$umur=30; // data integer
$berat=70.5; // data float
$_pekerjaan="Karyawan";
echo $nama;
echo $alamat;
echo $umur;
echo $berat;
echo $_pekerjaan;
echo '<br>';
echo "nama saya $nama alamat di $alamat <br>";
echo 'nama saya '. $nama. ' alamat di '. $alamat. '<br>';
echo "umur saya: $umur <br>";
echo "berat saya: $berat <br>";
echo 'pekerjaan saya: '. $_pekerjaan. '<br>';
echo '<hr>'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel User</title>
</head>
<body>
    <!-- cetak di dalam html -->
    <h2>Nama Saya: <?php echo $nama ?></h2>
    <h2>Saya Berumur: <?= $umur ?> Tahun</h2>
    <hr>
    
</body>
</html>

<?php
// Variable System
echo $_SERVER['SERVER_ADMIN'];
echo "<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br>";
echo "<hr>";



// Variable Konstanta
// define: untuk memangggil variable konstanta
define('PELAJARAN', 'PHP Dasar');
echo "Ini Matakuliah: ". PELAJARAN;
echo "<hr>";

$a=5;
$b=2;
echo $a+$b.'<br>';
echo $a-$b.'<br>';
echo $a*$b.'<br>';
echo $a/$b.'<br>';
echo $a%$b.'<br>'; // modulus (%), sisa pembagian
echo $a**$b.'<br>'; // pangkat
echo pow($a,$b).'<br>'; // pangkat
echo pow(2,3); //pangkat

echo '<br>';
echo '<hr>';

/*
SOAL:
Diketahui jari-jarinya 15, maka berapa luas lingkaran dan keliling lingkaran dengan jari-jari tersebut?
jika jari2: 15
rumus phi: 3.14
rumus luas: phi*(jari2*jari2)
rumus keliling: 2*phi*jari2
*/

define('PHI',3.14); // Variable konstanta
$jari2=15;
$luas=PHI*($jari2*$jari2);
$keliling=2*PHI*$jari2;

// Cetak di dalam PHP
echo $jari2;
echo '<br>';
echo $luas;
echo '<br>';
echo $keliling;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>

<hr>

<?php
// tipe data string
$itungstring="Belajar PHP di Kampus Merdeka";
var_dump($itungstring);
echo '<br>';

// Mengetahui tipe variable
$huruf="dono";
$hasil=gettype($huruf);
echo $hasil;
echo '<br>';

$bil=100;
$hasil=gettype($bil);
echo $hasil;
echo '<br>';

$bil2=7.50;
$hasil=gettype($bil2);
echo $hasil;
echo '<br>';


echo "<p style='color: blue; font-weight: bold;'>nama saya $nama alamat di $alamat</p>";

?>