<?php
$server="localhost";
$username="root";
$password="aufa1802";
$database="login";

mysql_connect($server,$username,$password) or die("Koneksi Gagal");
mysql_select_db($login) or die("Database tidak bisa dibuka");
?>