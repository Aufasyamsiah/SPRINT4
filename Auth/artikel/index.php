<?php
require_once('Login.php'); // include file Login.php
$login = new Login(); // membuat objek dari class Login

// if($_SESSION['status']){ // Validasi jika sudah login maka
//     header('Location: '); // redirect ke Profile.php
// }else{ // jika blom login maka tampilkan form login


?>  
<h3><a href="blog_user.php">Home</a></h3>
<hr>
<h1>User Session Login</h1>
    <form action="#" method="post">
        <label for="">Nama</label>
        <input type="text" name="name">
        <label for="">Password</label>
        <input type="password" name="pass">
        <input type="submit" name="submit" value="Login">
        <p>Belum punya akun?</p>
        <p><a href="register.php">Registrasi sekarang</a></p>
    </form>
     
<?php 
//}
$login->login();  //menggunakan function login dari class Login
?>
