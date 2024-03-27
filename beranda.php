<?php
session_start(); // Sesi tangkap login
if (!$_SESSION['user']) {
    header('location:latihan6.php');
}
?>

<h1>Selamat Datang <?= $_SESSION['user'];?></h1>

<br>

<form method="POST">
    <input type="submit" name="logout" value="logout">
</form>

<?php
if(isset($_POST['logout'])){
    session_destroy(); // Lepas sesi login
    header('locationL:latihan6.php');
}
?>