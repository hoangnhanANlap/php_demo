<?php
   include "../inc/database.php";
if (isset($_REQUEST['sub'])) {
        $a = $_REQUEST['uname'];
        $b = $_REQUEST['upassword'];
        $sqli = "SELECT * FROM tb_login.new_table WHERE users LIKE '".$a."' AND password LIKE '".$b."'";
        $_SESSION['uname'] = $a;
        $result = $conn->query($sqli)->fetch_assoc();
        if ($result) {
            if (isset($_REQUEST["remember"]) && $_REQUEST["remember"] == 1) {
                setcookie("login", "1", time() + 60*60*24*30); // ghi nhớ trong 30 ngày
                setcookie('username', $_POST['uname'], time() + 60*60*24*30); // ghi nhớ tên đăng nhập trong 30 ngày
                setcookie('password', $_POST['upassword'], time() + 60*60*24*30); // ghi nhớ mật khẩu trong 30 ngày
            } else {
                setcookie("login", "1"); // không ghi nhớ
                setcookie('username', ''); // xóa cookie lưu tên đăng nhập
                setcookie('password', ''); // xóa cookie lưu mật khẩu
            }
            header("location: ../view/profile.php"); 
            echo "Username or password is incorrect.";
        }
    }

  
    if (isset($_SESSION['uname'])) {
        // header("Location: ../view/login.php");
        exit();
    }
    ?> 