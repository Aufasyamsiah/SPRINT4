<?php
    // variable pendefinisian kredensial
    $usernamelogin = 'fara';
    $passwordlogin = 'laili';

    // memulai session
    session_start();

    // mengambil isian dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // pengecekan kredensial login
    if ($username == $usernamelogin && $password == $passwordlogin) {
        session_start();
        $_SESSION['fara'] = $username;
        header("Location: app.php");
    } 
    else {
        header("Location: login.php");
   }
?>