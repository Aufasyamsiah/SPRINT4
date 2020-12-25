<?php  

require_once 'Config.php';
class Reg extends Config 
{
   
    public function reg() 
    {
        $error = 'User name atau Password Salah';
        if (isset($_POST['submit'])) { 
            if (empty($_POST['name']) || empty($_POST['pass'])) { 
                echo $error; 
            } else { 
                $username=$_POST["name"];
                $password=$_POST["pass"]; //untuk password digunakan enskripsi md5


                //Query input menginput data kedalam tabel anggota
                $sql="insert into login (name,password) values
                        ('$username','$password')";

                //Mengeksekusi/menjalankan query diatas	
                $hasil=mysqli_query($this->connect(),$sql);

                //Kondisi apakah berhasil atau tidak
                if ($hasil) {
                    header("Location:index.php");
                    exit;
                }
                else {
                    header("Location:register.php");
                    exit;
                }  

            }
        }
    }
}
$reg = new Reg();

if(isset($_SESSION['status'])){
    header('Location: login.php');
}else{

?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
</head>
<body>

<h2>Register</h2>
    <form action="#" method="post">
	<table>
    <tr>
        <td><label>Username:</label></td><td>
        <input type="text" name="name" placeholder="Masukan Username" /></td>
	  </tr>
	  <tr>
	      <td><label>Password:</label></td><td>
        <input type="password" name="pass" placeholder="Masukan Password" /></td>
	   </tr>
  </table><br>
    <button type="submit" name="submit">Submit</button>
    <br>
    <p>Sudah punya akun?</p>
    <p><a href="user_login.php">Login</a></p>
    </form>
</body>
</html>
<?php
}
?>