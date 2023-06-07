
<?php
//include("index.php");
$pageTitle = "Đăng nhập";
$content = "login-content.php";

?>

<html>
<H1>Trang đăng nhập</H1>
    <fieldset>
  
        <head>
            
            <title>Đăng Nhập</title>
        </head>
        <legend>Login </legend>
        <form action="" method="POST"><br><br>
            Username: <input type="text" required="" name="uname"><br><br>
            Password: <input type="text" required="" name="upassword"><br><br>
            <input type="checkbox" value="1" name="remember">Remember me
            <input type="submit" value="Login" name="sub"><br>      
        </form>
        <a href="../action/add.php">
            <button name="Create">Create Accounts</button>
        </a>
    </fieldset>

<body>
  

    <?php 
  
  
   include '../action/login.php';
  ?>
    </body>
</html>
<?php
//include("index.php");


?>



