<?php
//sthêm tài khoản
// include "../view/add.php";

if(isset($_POST['submit'])){
    $users = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['emailadd'];
    $name = $_POST['nameadd'];

    // Kiểm tra xem người dùng đã nhập đầy đủ thông tin chưa
    if(empty($users) || empty($pass) || empty($email) || empty($name)){
        echo "Vui lòng nhập đầy đủ thông tin";
    } else {
        
        
        include "../inc/database.php"; 
        
       

        // câu lệnh truy vấn để thêm tài khoản mới vào CSDL
        $sql = "INSERT INTO new_table (users , password , email , name) VALUES ('$users', '$pass', '$email', '$name')";

        // Thực thi truy vấn và kiểm tra kết quả
        if(mysqli_query($conn, $sql)){
            echo "Tài khoản của bạn đã được tạo thành công";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }

        // Đóng kết nối
        mysqli_close($conn);
    }
}
?>