<?php
require_once('Config.php');  
//session_start();  
class Baca extends Config{ 

    public function baca(){ 

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
                        || kategori : <i><?php echo $blog['kategori'] ?></i> ||
                        date : <i><?php echo $blog['date'] ?></i>                  
                    </small>
                    
                </div>
                <?php
            }
        }else{ 
            echo '<h2>Tidak ada Artikel</h2>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Silahkan Login</title>
</head>
<body>
    <?php 
    require_once('blog_user.php'); 
    if(isset($_SESSION['status'])){ 
         ?>
        <h3></h3>

         <h3> <a href="Profile.php">Profile</a> </h3>
         <?php
     }else{ 
         ?>
          <h3> <a href="user_login.php">Login</a> </h3>  
         <?php
      }
     ?>
     <hr>
    <?php 
     $blog = new Baca(); 
     ?>
    
                
</body>
</html>