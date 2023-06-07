<html>
<head>
    <title>Update</title>
</head>
<body>
    <h1>Thông tin người dùng</h1>
    <form method="POST">
    <p>
            Tên Đăng Nhập: <input type="text" name="users" value="<?php echo $user['users']; ?>">
        </p> 
    <p>
            Tên TK: <input type="text" name="name" value="<?php echo $user['name']; ?>">
        </p>
        <p>
            Email: <input type="email" name="email" value="<?php echo $user['email']; ?>">
        </p>
        <p>
            Mật khẩu: <input type="password" name="password" value="<?php echo $user['password']; ?>">
        </p>
        <p>
            <input type="submit" name="update" value="Lưu thay đổi">
        </p>
       
    </form>
    <a href= "profile/profile.php">
			<button  name="exit">Exit</button>
		</a>
	</div>
	<div class="clearfix"></div>
</body>

</html>

	



