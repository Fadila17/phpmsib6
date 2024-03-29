<?php
// array: sekumpulan data
// array numerik dan array asosiatif

// 1. Array numerik
$ar_buah = ['pepaya', 'mangga', 'pisang', 'anggur', 'jeruk'];

// cetak indek ke?
echo $ar_buah[4];
echo "<hr>";

// tampilkan jumlah total pada buah
$jumlah = count($ar_buah);
echo $jumlah;
echo "<hr>";

// lihat hasil data buah dengan foreach
foreach ($ar_buah as $value){
    echo "$value <br>";
}
echo "<hr>";


// 2. Array asosiatif
$ar_hewan = [10=>'Babi Ngepet', 20=>'Bebek', 'kucing', 30=>'Putri Duyung', 'Anjing Galax'];
echo $ar_hewan[20];
echo "<hr>";

// lihat hasil data hewan dengan foreach
foreach ($ar_hewan as $id => $nama){
    echo "$id $nama <br>";
}
echo "<hr>";


// 3. Array multidimensi (array dalam array)
$daftar_staf = [
    ["nama"=>'Budi', "Alamat"=>"Depok", "Telp"=>312345, "status"=>"Jomblo"],
    ["nama"=>'Alif', "Alamat"=>"Bogor", "Telp"=>898132, "status"=>"Duda"],
    ["nama"=>'Jamal', "Alamat"=>"Mars", "Telp"=>8374234, "status"=>"Duda"],
];

foreach ($daftar_staf as $idx => $namax){
    echo "$namax[nama] <br>";
}
echo "<hr>";

//3. ARRAY MULTIDIMENSI (ARRAY DALAM ARRAY)
//CARA 2:
$a1=["nama"=>"Budi", "Alamat"=>"Depok", "Telp"=>212345, "status"=>"Jomblo"];
$a2=["nama"=>"Alif", "Alamat"=>"Bogor", "Telp"=>898123, "status"=>"Duda"];
$a3=["nama"=>"Jamal", "Alamat"=>"Mars", "Telp"=>743863, "status"=>"Jomblo Gatel"];
$daftar_siswa = [$a1,$a2,$a3];
foreach ($daftar_siswa as $namaxx) {
    echo "$namaxx[nama] <br>";
}
?>

