<?php
$a1 = ['kode'=>'1111', 'buah'=>'Apel', 'harga'=>20000, 'jumlah'=>4];
$a2 = ['kode'=>'2222', 'buah'=>'Mangga', 'harga'=>25000, 'jumlah'=>5];
$a3 = ['kode'=>'3333', 'buah'=>'Pisang', 'harga'=>30000, 'jumlah'=>6];
$a4 = ['kode'=>'4444', 'buah'=>'Jambu', 'harga'=>35000, 'jumlah'=>7];
$a5 = ['kode'=>'5555', 'buah'=>'Durian', 'harga'=>40000, 'jumlah'=>8];

$ar_buah = [$a1,$a2,$a3,$a4,$a5];

// Dekalrasikan nama-nama judul pada table header menggunakan looping array
$ar_judul = ['No', 'Kode', 'Buah', 'Harga', 'Jumlah Beli', 'Harga Kotor', 'Diskon', 'Harga Bayar'];

// Funsgi agregat di array
$jumlah_harga = array_column($ar_buah,'harga');
$harga_total = array_sum($jumlah_harga);
$harga_tertinggi = max($jumlah_harga);
$harga_terendah = min($jumlah_harga);
$jumlah_transaksi = count($ar_buah);
$harga_rata2 = $harga_total / $jumlah_transaksi;
$nilaitengah= 

$keterangan = [
    'Harga Total' =>$harga_total,
    'Harga Tertinggi' =>$harga_tertinggi,
    'Harga Terendah' =>$harga_terendah,
    'Jumlah Transaksi' =>$jumlah_transaksi,
    'Rata-Rata Harga' =>$harga_rata2
];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Buah-buahan</title>
</head>
<body>
    <h3 align="center">Daftar Buah-buahan</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr>
            <?php
            foreach($ar_judul as $judul){ ?>
                <th><?= $judul ?></th>
            <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
                $no=1;
                foreach ($ar_buah as $buah){ 
                $bruto = $buah['harga'] * $buah['jumlah'];
                $diskon = ($buah['buah'] == 'Durian' && $buah['jumlah'] >=5) ? 0.2 : 0.1;
                $hargadiskon = $diskon * $bruto;
                $hargabayar = $bruto - $hargadiskon;
                ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $buah['kode'] ?></td>
                <td><?= $buah['buah'] ?></td>
                <td><?= $buah['harga'] ?></td>
                <td><?= $buah['jumlah'] ?></td>
                <td><?= $bruto ?></td>
                <td><?= $hargadiskon ?></td>
                <td><?= $hargabayar ?></td>

            </tr>
                <?php } ?>
        </tbody>
        <tfoot>
                <?php
                foreach($keterangan as $ket => $hasil){

                
                ?>
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>
                
                <?php } ?>
        </tfoot>
    </table>
</body>
</html>