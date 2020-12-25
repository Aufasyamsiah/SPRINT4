<?php
require_once('Blog.php');  
if ($_POST['submit']) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $kategori = $_POST['nama'];
    $author = $_POST['author'];
    $date = date('Y-m-d');

    $insert = "INSERT INTO blog (title, content, author, date) VALUES ('$title', '$content', '$author', '$date') ";
    $sql = "INSERT INTO kategori (nama) VALUE ('$kategori') ";
    $error= "masih ada yang kosong";
    if($this->connect()->query($insert,$sql) === TRUE ){
        echo 'Berhasil Menambah Artikel';
    }else{
        echo "Error: " , $insert ,  "<br>" . $this->connect()->error;
    }
    $this->connect()->close();
}
$blog= new Blog();

    ?>

<h1>Buat Artikel</h1>
<br>
<hr>
<form action="" method="post">
    <label for="">Judul</label>
    <input type="text" name="title">
    <br>
    <label for="">Content</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
    <br>
    <label for="">Author</label>
    <input type="author" name="author" >
    <br>
    <label for="">Kategori</label>
    <input type="text" name="kategori">
    <br>
    <input type="submit" name="submit" value="submit">
</form>