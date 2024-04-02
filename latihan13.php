<h1>Function Define by PHP</h1>
<?php
// Contoh fungsi bawaan dari PHP
$str = 'Belajar PHP di Kampus Merdeka';
echo $str;
echo '<hr>';

$str = strtoupper($str); // Huruf kapital semua
echo $str;
echo '<hr>';

$str = strtolower($str); // Huruf kecil semua
echo $str;
echo '<hr>';

$str = ucfirst($str); // Huruf kapital di awal kalimat
echo $str;
echo '<hr>';

$str = ucwords($str); // Huruf kapital di awal setiap kata
echo $str;
echo '<hr>';

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
sort($ar_buah); // Mengurutkan A - Z
foreach ($ar_buah as $buah) {
    echo "$buah <br>";
}
echo '<hr>';

$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu', 'apel'];
arsort($ar_buah); // Mengurutkan Z - A
foreach ($ar_buah as $buah) {
    echo "$buah <br>";
}
echo '<hr>';
?>

<h1>Function Define by User</h1>

<?php
// Function Define by User => void

// 1. Fungsi tanpa parameter/argumen
function salam (){
    echo 'Selamat Pagi Semuanya';
}
salam();
echo '<hr>';


// 2. Fungsi dengan parameter/argumen
function sapa ($kawan){
    echo "Selamat Pagi $kawan";
}
sapa("Rozir"); // Cetak 1
echo '<br>';

$nama = 'Jamal'; // Cetak 2
sapa($nama);
echo '<hr>';


// 3. Fungsi dengan parameter/argumen beserta isinya
function kabar ($kawan='sabardi'){
    echo "Hai Apa Kabar $kawan";
}
kabar(); // Cetak 1
echo '<br>';

kabar('ahmad'); // Cetak 2
echo '<br>';

$siswa = 'Budi'; // Cetak 3
kabar($siswa);
echo '<hr>';

// Fungsi void ( tidak mengembalikan nilai)
function hitung ($x, $y){
    $z = $x + $y;
    echo $z;
}
hitung (60,35);
echo '<br>';

// Fungai return (mengembalikan nilai)
function tambah ($a, $b){
    $c = $a + $b;
    return $c;
}
echo tambah (60,30);
echo '<hr>';


// Buat fungsi hitung umur
function hitungumur ($tahunlahir){
    $tahunsekarang = 2024;
    $umur = $tahunsekarang - $tahunlahir;
    return $umur;
}
echo hitungumur(2000);
echo '<br>';
echo 'Umur Saya Adalah '. hitungumur(2003). ' Tahun';
?>