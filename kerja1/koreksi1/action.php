<?php
if(isset($_POST['submit'])){
    echo'<table>';
    echo'<tr><td>'.'Nama Barang : '.$_POST['nama_barang'].'</td></tr>';
    echo'<tr><td>'.'Harga : '.$_POST['harga'].'</td></tr>';
}
if(isset($_GET['submit'])){
    echo'<table>';
    echo'<tr><td>'.'Nama Kurir : '.$_GET['Nama_Kurir'].'</td></tr>';
    echo'<tr><td>'.'Nama Pengirim : '.$_GET['Nama_Pengirim'].'</td></tr>';
    echo'<tr><td>'.'Asal Barang : '.$_GET['Asal_Barang'].'</td></tr>';
    echo'<tr><td>'.'Tujuan Barang : '.$_GET['Nama_Pengirim'].'</td></tr>';   
}
?>