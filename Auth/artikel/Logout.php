<?php
session_start(); 

class Logout{ 

    public function logout(){ 
        session_destroy(); 
        return header('Location: index.php'); 
    }
}

$logout = new Logout(); 
$logout->logout(); 