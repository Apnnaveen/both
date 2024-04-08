<?php   session_start();  ?>

<html>
  <body>
<?php
      if(!isset($_SESSION['use'])) 
       {
           header("Location:home.php");  
       }

          echo $_SESSION['use'];

          echo "Login Success";

          echo "<a href='logout.php'> Logout</a> "; 
?>
</body>
</html>