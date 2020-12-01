<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kode = $_POST['kode'];
  $harga = $_POST['harga'];
  
  // update data berdasarkan id_produk yg dikirimkan
  $q = $conn->query("UPDATE data SET nama = '$nama', kode = '$kode', harga = '$harga' WHERE id = '$id'");

  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Daftar data berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Daftar data gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}