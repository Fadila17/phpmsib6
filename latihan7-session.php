<?php
 session_start(); 
 // Sesi tangkap login
 // Di sini tangkap nama username yang di ketik, ex: admin
?>

<form action="" method="POST">
    <label for="">Username</label>:
    <input type="text" name="username" placeholder="masukan nama anda"><br><br>
    <label for="">Password</label>:
    <input type="password" name="password" placeholder="masukan password anda"><br><br>
    <input type="submit" name="masuk" value="login">
</form>

<?php
if(isset($_POST['masuk'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Jika user dan password cocok makan dapat login
    // Selain itu di tolak
    if($username == 'dono' && $password == '123') {
        $_SESSION['user'] = $username;
        header('location: beranda-session.php');
    } else if($username == 'kasino' && $password == '321') {
        $_SESSION['user'] = $username;
        header('location: beranda-session.php');
    } else {
        echo "<script>alert('User & Password Anda Salah, Coba lagi!!'); </script>";
    }
}    
?>
<!-- ujicobanya: buka web ini sebanyak 2 web (2x dengan browser yg sama), salah satu web logout, harusnya web yg sama juga ikut logout karena ada session  -->