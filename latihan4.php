<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form action="#" method="POST">
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama" >
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" >
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="email" >
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="tanggallahir" >
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="Laki-laki"> Laki-Laki
            <input type="radio" name="jk" value="Perempuan"> Perempuan
        </div>
        <div>
            <input type="submit" value="simpan"     >
        </div>
    </form>
</body>
</html>

<?php
error_reporting(0);
echo 'Nama: '. $_POST['nama'] .'<br>';
echo 'Password: '. $_POST['password'] .'<br>';
echo 'Email: '. $_POST['email'] .'<br>';
echo 'Tanggal Lahir: '. $_POST['tanggallahir'] .'<br>';
echo 'Jenis Kelamin: '. $_POST['jk'] .'<br>';
?>