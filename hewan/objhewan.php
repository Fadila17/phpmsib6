<?php
require_once 'kambing.php';
require_once 'kucing.php';
require_once 'anjing.php';

// ciptakan objek
$shaun = new Kambing();
$tom = new Kucing();
$scobydo = new Anjing();

// deklarasi objek
$suarahewan = [$shaun, $tom, $scobydo];

// cetak dengan foreachh
foreach($suarahewan as $hewan){
    echo $hewan->bersuara();
}
?>