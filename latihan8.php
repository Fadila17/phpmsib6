<?php
// Looping FOR
// Hitung pengulangan 1 s.d 10
for($x=1;$x<=10;$x++){
    echo "$x <br>";
}
echo "<hr>";

// Hitung pengulangan 10 s.d 1
for($y=10;$y>=1;$y--){
    echo "$y <br>";
}
echo "<hr>";

// Perulangan dengan kata
for($z=1;$z<=10;$z=$z+1){
    echo "Belajar PHP <br>";
}
echo "<hr>";


// Looping While
// Hitung pengulangan 1 s.d 10
$j=1;
while($j<=10){
    echo "$j <br>";
    $j++;
}
echo "<hr>";

// Hitung pengulangan 10 s.d 1
$k=10;
while($k>=1){
    echo "$k <br>";
    $k--;
}
echo "<hr>";



?>

<form>
    Jumlah Siswa:
    <?php
    for($s=1;$s<=10;$s++){
        echo '<input type="radio" name="jk" value="$s">'.$s;
    }
    ?>
</form>