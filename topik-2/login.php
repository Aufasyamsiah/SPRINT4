<?php

session_start();

if (isset($_POST['submit'])) {
     if (empty($_POST['name']) || empty($_POST['pass'])) {
        echo $error;
    }else{
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        $con = mysqli_connect('localhost', 'root', 'root', 'pondok');

        $login = mysqli_query($con,"SELECT name, password from login where name='$name' AND password='$pass' ");
        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            $_SESSION['name'] = $name;
            $_SESSION['status'] = "login";
            header("Location: profil.php");
        }else{
            echo $error;
        }
    }
}
?>