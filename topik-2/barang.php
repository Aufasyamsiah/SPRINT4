<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>PENGIRIMAN BARANG</h1>

<form action="panggil.php"method="POST" >
                <table>
                    <tr><td><input type="text" name="nama_barang" placeholder="Nama Barang"></tr></td>
                    <tr><td><input type="text" name="harga" placeholder="Harga"></tr></td>
                    <tr><td><input type="text" name="nama_pengirim" placeholder="Nama Pengirim"></tr></td>
                    <tr><td><input type="text" name="asal_barang" placeholder="Asal Barang"></tr></td>
                    <tr><td><input type="text" name="tujuan_barang" placeholder="Tujuan Barang"></tr></td>
                    <tr><td><input type="submit" value="submit" name="submit"></tr></td>
                    
                </table>
            </form>
            <br>


            <?php
session_start();
unset($_SESSION['username']);
?>
<h2>Silahkan</h2>
<p>

Klik <a href="logout.php">disini</a> untuk logout.
</p>