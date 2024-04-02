<?php
// Sertakan file classnya
require_once 'siswa.php';

// Ciptakan objek
$ns1 = new Siswa('Jamal', 50, 'PHP');
$ns2 = new Siswa('Dono', 90, 'HTML');
$ns3 = new Siswa('Randy', 60, 'JavaScript');


$ar_siswa =[$ns1, $ns2, $ns3];

// Cetak
$no=1;
foreach($ar_siswa as $sis){
    echo $sis->nama. '<br>';
    echo $sis->nilai. '<br>';
    echo $sis->pelajaran. '<br>';
}

echo '<hr>';



// Ciptakan objek
/*
$ns1 = new Siswa ();
$ns1->nama = "Jamal";
$ns1->nilai = 90;
$ns1->pelajaran = "PHP";

// Cetak
echo $ns1->nama;
echo $ns1->nilai;
echo $ns1->pelajaran;

echo $ns1->gethasil()
*/


?>

<h2 align="cente">Daftar Nilai Siswa</h2>
<table border="1" width="50%" cellspacing="0" >
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai</th>
            <th>pelajaran</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php
        $no=1;
        foreach($ar_siswa as $sis){
            echo '<tr>';
            echo '<td>'. $no++ . '</td>' ;
            echo '<td>'. $sis->nama . '</td>';
            echo '<td>'. $sis->nilai . '</td>';
            echo '<td>'. $sis->pelajaran . '</td>';
            echo '<td>'. $sis->getHasil() .'</td>';
            echo '</tr>';
        }
    ?>
    </tbody>
</table>