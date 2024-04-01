<?php 
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Tondano</title>
</head>
<body>
    <h1 align="center">Tondano</h1>
    <div style="text-align:center; background-color:gray; color:white;">
        <!-- Home | Produk | Pesan | Galeri | Gesbuk -->
        <?php
            // looping foreach dari webmenu.php
            foreach ($menu_atas as $key => $value) {
                // echo "$key $value <br>";
                echo "<a href ='index.php?hal=$key'>$value</a> | ";
            }
        ?>
    </div>
</body>
</html>

<style>
    a {
        text-decoration: none;
    }

    a:link, a:visited {
color: white;
}
</style>