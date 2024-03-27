<?php
    session_start(); // Sesi tangkap login   
?>

<form action="" method="POST">
    <label for="">Username</label>
    <input type="text" name="username" placeholder="Masukkan nama anda"><br><br>
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Masukkan password anda"><br><br>
    <input type="submit" name="masuk" value="login">
</form> 


<?php
if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Jika user dan password cocok maka dapat login
    // Selain itu di tolak

    if($username == 'admin' && $password == 'rahasia'){
        $_SESSION['user'] == $username;
        header('location:beranda.php');
    } else {
        echo "<script>alert('Password anda salah, coba lagi!!'); </script>";
    }
}
?>

