<?php



// Lấy dữ liệu từ form và gọi hàm capNhat để cập nhật
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $users = $_POST['users'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    capNhat('new_table', 'id', $id, array('users', 'password', 'email', 'name'), array($users, $password, $email, $name));
}
?>