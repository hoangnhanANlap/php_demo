<?php 
	// 	session_start(); // Bắt đầu session
		if (!isset($_SESSION['uname']) || empty($_SESSION['uname'])) {
		   // Nếu session không tồn tại hoặc không chứa tên người dùng, chuyển hướng người dùng đến trang đăng nhập
		   header("Location: ../view/login.php");
		   exit;
		}
	 include '../action/add.php';
     //include '../inc/add.php';
	// 	?>

<!-- Form nhập thông tin tài khoản -->
<form method="POST" action="">
    <input type="text" name="username" placeholder="Tên đăng nhập"><br>
    <input type="password" name="pass" placeholder="Mật khẩu"><br>
    <input type="email" name="emailadd" placeholder="Email"><br>
    <input type="text" name="nameadd" placeholder="Họ tên"><br><br>
    <input type="submit" name="submit" value="Tạo tài khoản">
   </form>
<a href= "/index.php">
			<button  name="exit">Exit</button>
		</a>