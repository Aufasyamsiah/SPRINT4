<?php
require_once('Config.php');  
//session_start();  
class Blog extends Config{ 

    public function blog_index(){ 

        $data = "SELECT * FROM blog"; 
        
        $blogs = $this->connect()->query($data); 
        ?>
        
        <h1><i>Artikel Yang Ada</i></h1> 
        <?php
        
        if ($blogs->num_rows > 0){
            while($blog = $blogs->fetch_assoc()){ 
                ?>
                <div style="border: 1px solid #000; padding: 5%; margin-top: 3%">
                    <h3><?php echo $blog['title'] ?></h3> 
                    <hr>
                    <p><?php echo $blog['content'] ?></p> 
                    <br>
                    <small>
                        penulis : <i><?php echo $blog['author'] ?></i> 
                        date : <i><?php echo $blog['date'] ?></i> 
                        <?php 
                        if($_SESSION['status']="Login.php"){ 
                             ?>
                             || <a style="color:red;" href="delete.php?id=<?php echo $blog['id']; ?>">Delete</a>
                             || <a href="edit.php?id=<?php echo $blog['id'];?>" style="color:green;" href="">Edit</a>
                             <?php
                        }
                        ?>                      
                    </small>
                    
                </div>
                <?php
            }
        }else{ 
            echo '<h2>Tidak ada Artikel</h2>';
        }
    }

    public function blog_create($title, $content, $author, $kategori, $date) 
    {

        
                $insert = "INSERT INTO blog (title, content, author, kategori, date) VALUES ('$title', '$content', '$author', '$kategori', '$date') "; 
                //var_dump($insert);
            
                if(mysqli_query($this->connect(), $insert)){ 
                   return header("Location: index.php ");
                }else{ 
                    echo "Error: " . $insert . "<br>" . $this->connect()->error;

                }
            }
        
        
    public function blog_delete($id){ 
        $sql = "DELETE FROM blog WHERE id=$id";

        if (mysqli_query($this->connect(), $sql)) { 
            return header('Location: user_login.php'); 
        } else { 
            echo "Error deleting record: " . mysqli_error($this->connect()); 
        }
        
    }

    public function blog_edit($id){ 
        if(isset($_POST['simpan'])){ 
            
            $title = $_POST['title']; 
            $content = $_POST['content'];
            $sql = "UPDATE blog SET title='$title', content='$content' WHERE id='$id'"; 

            if(mysqli_query($this->connect(),$sql)){ 
                header('Location: user_login.php'); 
            }else{ 
                echo "Error Edit record: " . mysqli_error($this->connect());
            }
        }
    }
}