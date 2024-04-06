<?php
// sertakan file class
require_once 'Bank.php';


// ciptakan objek baru
$n1 = new Bank ('001', 'Alif', 5000000);
$n2 = new Bank ('002', 'Jamal', 7000000);
$n3 = new Bank ('003', 'Budi', 9000000);
$n4 = new Bank ('004', 'Dini', 12000000);

// panggil function menabung
$n1->menabung(3000000);


// panggil function menarik uang
$n4->menarik(2000000);

// panggil function cetak
echo '<h3 = align="center">'. Bank::BANK .'</h3>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
echo '<h3>Jumlah nasabah: '. Bank::$jml .'</h3>';

?>