<?php

require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan id_data
  $q = $conn->query("SELECT * FROM data WHERE id = '$id'");

 // foreach ($q as $dt) :
  ?>

  <h1>CRUD dengan PHP MySQL</h1>
  <h2>Halaman Ubah Data</h2>

  <form action="proses update.php" method="post">
    <input type="hidden" name="id" value="<?= $dt['id'] ?>">
    <input type="text" name="nama" value="<?= $dt['nama'] ?>">
    <input type="number" name="kode" value="<?= $dt['kode'] ?>">
    <input type="number" name="harga" value="<?= $dt['harga'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
   ///endforeach;
}
