<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form - Kalkulator</title>
</head>

<body>
    <form action="#" method="GET">
        <table align="center" border="0" cellspacing="0" cellpadding="10" width="30%">
            <thead>
                <tr bgcolor="gray">
                    <th colspan="2">Kalkulator</th>
                </tr>
            </thead>
            <tbody>
                <tr bgcolor="lightgray">
                    <td width="30%">Angka 1</td>
                    <td>
                        <input type="text" name="a1">
                    </td>
                </tr>
                <tr bgcolor="lightgray">
                    <td width="30%">Angka 2</td>
                    <td>
                        <input type="text" name="a2">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="gray">
                    <th colspan="2">
                        <button type="submit" name="proses" value="tambah">+</button>
                        <button type="submit" name="proses" value="kurang">-</button>
                        <button type="submit" name="proses" value="kali">x</button>
                        <button type="submit" name="proses" value="bagi">/</button>
                        <button type="submit" name="proses" value="pangkat">^</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

</html>

<?php
// Buat fungsi
function hitung($a1, $a2, $tombol)
{
    if ($tombol == 'tambah') {
        $hasil = $a1 + $a2;
    }
    else if ($tombol == 'kurang') {
        $hasil = $a1 - $a2;
    }
    else if ($tombol == 'kali') {
        $hasil = $a1 * $a2;
    }
    else if ($tombol == 'bagi') {
        $hasil = $a1 / $a2;
    }
    else if ($tombol == 'pangkat') {
        $hasil = $a1 ** $a2;
    }
    else {
        $hasil = 0;
    }   

    return $hasil;
}

// Tangkap request
$a1 = $_GET['a1'];
$a2 = $_GET['a2'];
$tombol = $_GET['proses'];
$hasil = hitung($a1, $a2, $tombol);

// Cetak dari pemanggilan fungsi
if (isset($tombol)) {
    echo "<center><h3>Hasil Bilangan $a1 $tombol $a2 Adalah $hasil </h3></center>";
}
?>