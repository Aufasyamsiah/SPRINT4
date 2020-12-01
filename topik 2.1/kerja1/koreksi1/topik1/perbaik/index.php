<?php
// panggil koneksinya
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>CRUD PHP Sederhana</title>
</head>
<body>
  <h1>CRUD PHP Sederhana</h1>
  
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="text" name="nama" placeholder="Nama">
    <input type="number" name="kode" placeholder="Kode">
    <input type="number" name="harga" placeholder="Harga">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>

  <!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>nama</th>
      <th>kode</th>
      <th>harga</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM data");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nama'] ?></td>
      <td><?= $dt['kode'] ?></td>
      <td><?= $dt['harga'] ?></td>
      <td><a href="update.php?id=<?= $dt['id_data'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_data'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
</body>
</html>