<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="tugas2.php" method="POST">
    <div class="container mt-4">
            <div class="form-group row">
                <label for="namapelanggan" class="col-4 col-form-label">Nama Pelanggan</label>
                <div class="col-8">
                    <input id="namapelanggan" name="namapelanggan" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="produkpilihan" class="col-4 col-form-label">Produk Pilihan</label>
                <div class="col-8">
                    <select id="produkpilihan" name="produkpilihan" class="custom-select">
                        <option value="">--- Pilih Produk ---</option>
                        <option value="tv">TV</option>
                        <option value="kulkas">KULKAS</option>
                        <option value="mesincuci">MESIN CUCI</option>
                        <option value="ac">AC</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlahbeli" class="col-4 col-form-label">Jumlah Beli</label>
                <div class="col-8">
                    <input id="jumlahbeli" name="jumlahbeli" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Beli</button>
                    <button name="unproses" type="reset" class="btn btn-danger">Batal</button>
                </div>
            </div>
    </div>
</form>

<?php
$namapelanggan = $_POST['namapelanggan'];
$produkpilihan = $_POST['produkpilihan'];
$jumlahbeli = $_POST['jumlahbeli'];
$proses =$_POST['proses'];




// Harga Satuan
if ($produkpilihan == 'tv') $hargasatuan = '1250000';
else if ($produkpilihan == 'kulkas') $hargasatuan = '1500000';
else if ($produkpilihan == 'mesincuci') $hargasatuan = '2000000';
else if ($produkpilihan == 'ac') $hargasatuan = '2500000';
else $hargasatuan = '';

// Total Belanja
$totalbelanja = $jumlahbeli * $hargasatuan;

// Diskon
$diskon= 0.2* $totalbelanja;

// PPN (Pajak Pertambahan Nilai)
$ppn = 0.1 * ($totalbelanja - $diskon);

// Harga Bersih
$hargabersih = ($totalbelanja - $diskon) + $ppn;

function rp($rupiah)
{
    $hasilrupiah = "Rp " . number_format($rupiah, 2, ",", ".");
    return $hasilrupiah;
}

if(isset($proses)){

?>

<Table>
    <tr>
        <th>Nama Pelanggan</th>
        <th>Produk Pilihan</th>
        <th>Jumlah Beli</th>
        <th>Harga Satuan</th>
        <th>Total Belanja</th>
        <th>Potongan Diskon</th>
        <th>PPN</th>
        <th>Harga Bersih</th>
    </tr>
    <tr>
        <td><?= $namapelanggan ?></td>
        <td><?= $produkpilihan ?></td>
        <td><?= $jumlahbeli ?></td>
        <td><?= rp($hargasatuan) ?></td>
        <td><?= rp($totalbelanja) ?></td>
        <td><?= rp($diskon) ?></td>
        <td><?= rp($ppn) ?></td>
        <td><?= rp($hargabersih) ?></td>
    </tr>
</Table>

<style>
    table,
    td,
    th {
        border: 1px solid;
        border-spacing: 0;
        font-size: large;
        padding: 5px;
    }

    table {
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
</style>
<?php } ?>
