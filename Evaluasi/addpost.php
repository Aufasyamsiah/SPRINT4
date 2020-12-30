<?php
require_once('Blog.php');  
    class Add extends Blog{ 

        public function blog_add(){
            if($_SESSION['status']="login"){
                ?>
                <h1>Buat Artikel</h1>
                <a href="user_login.php">Kembali</a>
                <br>
                <hr>
                <form action="" method="post">
                    <label for="">Title</label>
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
                <body>
                    <?php
                        if ($_POST['submit']) {
                            $title = $_POST['title'];
                            $content = $_POST['content'];
                            $kategori = $_POST['kategori'];
                            $author = $_POST['author'];
                            $date = date('Y-m-d');
            
                            $insert = "INSERT INTO blog (title, content, author, kategori, date) VALUES ('$title', '$content', '$author', '$kategori', '$date') ";
                            //  $sql = "INSERT INTO kategori (nama) VALUES ('$kategori') ";
                            $error= "masih ada yang kosong";
                            if($this->connect()->query($insert) === TRUE ){
                                echo 'Berhasil Menambah Artikel';
                            }else{
                                echo "Error: " , $insert ,  "<br>" . $this->connect()->error;
                            }
                            $this->connect()->close();
                        }
            } 
        }
    }            
            
    $blog= new Add();
    $blog->blog_add();
 

