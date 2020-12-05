<?php
if(isset($_POST['submit'])){
    echo'<table>';
    echo'<tr><td>'.'Nama Barang : '.$_POST['nama_barang'].'</td></tr>';
    echo'<tr><td>'.'Harga : '.$_POST['harga'].'</td></tr>';
    echo'<tr><td>'.'Nama Pengirim : '.$_POST['nama_pengirim'].'</td></tr>';
    echo'<tr><td>'.'Asal Barang : '.$_POST['asal_barang'].'</td></tr>';
    echo'<tr><td>'.'Tujuan Barang : '.$_POST['nama_pengirim'].'</td></tr>';   
}
?>