<?php  session_start();  

if(isset($_POST['login']))   
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Naveen" && $pass == "04652")    
         {                                        

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("login.php","_self");</script>';           
        }

        else
        {
            echo "INVALID USERNAME OR PASSWORD";        
        }
}
 ?>
<html>
<head>

<title> Login Page</title>

</head>

<body>

<form  method="post">

<label>USERNAME :</label> <input  name="user" placeholder="username" type="text"><br>
<label> PASSWORD :</label>    <input name="pass" placeholder="*********" type="password"><br>
<input name="login" type="submit" value=" LOGIN "><br>
 
</form>

</body>
</html>