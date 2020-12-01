<?php

require_once 'koneksi.php';
// return var_dump(isset($_POST['submit']));
if (isset($_POST['submit'])) {
  $nama = $_POST['nama'];
  $kode = $_POST['kode'];
  $harga = $_POST['harga'];

  // id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO data(nama, kode, harga) VALUE ('$nama','$kode', '$harga')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Daftar data berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    // echo "data gagal ditambahkan". $conn->error;
    echo "<script>alert('Daftar data gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}