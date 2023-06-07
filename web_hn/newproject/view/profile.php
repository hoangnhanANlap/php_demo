

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Admin Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">	
	</head>
	<body>
	<H1>Trang Cá Nhân</H1>
           <?php
					include "../inc/database.php";
                  
if (!isset($_SESSION['uname']) || empty($_SESSION['uname'])) {
    // Nếu session không tồn tại hoặc không chứa tên người dùng, chuyển hướng người dùng đến trang đăng nhập
    header("Location: ../view/login.php");

   
    $username = $_SESSION['uname'];
    //include '..inc/database.php';
    // include '../database/data.php';
    echo 'Xin Chào ' .$user['name'];
    exit;
}

			

	





                // echo "</div>";
			   
          ?>
		  
		  <?php 
		//session_start(); // Bắt đầu session
		
	
		?> 
						
					<div class="card-footer">
						
						<a href= "../view/updateAdmin.php">
			<button class=sửa_hồ_sơ type="submit" name="update">SỬA HỒ SƠ</button>
		</a>
						
						<a href= "addfriend.php">
			<button class=addfriend type="submit" name="addfriend">thêm bạn</button>
		</a>
					</div>
				</div>
			</div>
		</div>
		<a href= "../view/logout.php">
			<button class=dangxuat type="submit" name="đăng xuất">Đăng Xuất</button>
		</a>
	</body>
</html>
<style>
			.dangxuat
			{	
				border-radius: 5px;
				background-color: #2196F3;
				padding-top: 2px;
				display: flex;
				justify-content: center;
				cursor: pointer;
				display: inline-block;}
			html, body{
				height: 100px;
				padding: 01;
				background: rgba(0,0,0,0.02) !important;
			}
			.card-header{
				background-image: url('http://www.latestseotutorial.com/wp-content/uploads/2016/12/love-dp-for-facebook.jpg') !important;
				padding: 0 !important;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
				height: 150px;
				position: relative;
				display: flex;
				justify-content: center;
				text-align:center;
			}
			.card{
				overflow: hidden;
				border:0 !important;
				width: 300px;
				box-shadow: 0px 0px 15px 1px;
				-webkit-box-shadow:0px 0px 15px 1px;
			}
			.profile_pic{
				position: absolute;
				bottom: -50px;
				height: 112px;
				width: 112px;
				padding: 5px;
				border: 2px solid #f39c12;
				border-radius: 50%;
			}
			.card-body{
				padding-top: 55px !important;
			}
			.profile_pic img{
				height: 100px;
				width: 100px;
				border-radius: 50%;
			}
			.name_container{
				display: flex;
				justify-content: center;
			
			}
			.name{
				font-size: 20px;
				font-weight: 700;
				color: #333;
				position: relative;
			}
			.name::after{
				font-family: "Font Awesome 5 Free";
				content: '\f058';
				position: absolute;
				right: -15px;
				top:0;
				font-size: 15px;
				font-weight: 700;
				color: #4CAF50;
			}
			.address{
				display: flex;
				justify-content: center;
				font-size: 12px;
				color: gray;
			}
        
			.email{
				display: flex;
				justify-content: center;
				font-size: 12px;
				color: gray;
			}
			 .follow{
				padding-top: 20px;
				display: flex;
				justify-content: center; 
			}
			.follow_btn{
				background: #2196F3;
				padding: 7px;
				color: #fff;
				border-radius: 12px;
				cursor: pointer;
			}

			.follow_btn::before{
				font-family: "Font Awesome 5 Free";
				content: "\f234";
				font-weight: 600;
				margin-right: 5px;
			


			}
			.follow_btn:hover{
				background: #f39c12;
			}
			.info_container{
				padding-top: 20px;
				display: flex;
				justify-content: space-around;
				flex-direction: row;
			}
			.info{
				display: flex;
				flex-direction: column;
			}
			.info p:first-child{
				margin-bottom: 0;
				font-size: 12px;
				color: gray;
				text-transform: uppercase;
				text-align: center;
			}
			.info p:last-child{
				margin-bottom: 0;
				font-size: 20px;
				font-weight: 700;
				color: gray;
				text-transform: uppercase;
				text-align: center;
			}
			.card-footer{
				padding: 0 !important;
				background: #fff !important;
				display: table;
				border-top: 0 !important;
			}
			.addfriend{
				display: flex;
				justify-content: center;
				padding: 10px;
				width: 150%;
				text-transform: uppercase;
				background: #f39c12;
				color: #fff;
				cursor: pointer;
				border-bottom-right-radius: calc(0.25rem - 1px);
			}

			.addfriend::before{
				font-family: "Font Awesome 5 Free";
				content: "\f27a";
				font-weight: 600;
				margin-right: 5px;
			}
		    .sửa_hồ_sơ{
				display: flex;
				justify-content: center;
				padding: 10px;
				width: 150%;
				text-transform: uppercase;
				background: #e74c3c;
				color: #fff;
				cursor: pointer;
				border-bottom-left-radius: calc(0.25rem - 1px);
				
			}
			.sửa_hồ_sơ::before{
				font-family: "Font Awesome 5 Free";
				content: "\f406";
				margin-right: 5px;
				font-weight: 600;
			}
</style>