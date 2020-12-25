<?php
session_start(); 
class Profile{ 

    public function profile(){ 
        if( isset($_SESSION['status']) ){ 
            ?>
            <!-- <h3><a href="index.php">Home</a> | <a href="blog_addpost.php">Buat Artikel Baru</a> | <a href="Logout.php">Logout</a></h3> -->
            <!-- <hr> -->
            <h1>Profile Saya</h1>
            <p>
                Selamat Datang <b><i><?php echo $_SESSION['name']; ?></i></b> 
            </p>
            <br>
            <br>
            <h3><a href="index.php">Home</a> | <a href="user_login.php">Halaman Penulis</a> | <a href="Logout.php">Logout</a></h3>
            <hr>

            <?php
        }else{ 
            echo 'Silahkan Login Terlebih dahulu <br>';
            echo '<a href="index.php">Login</a>';
            
        }
    }

}

$profile = new Profile();