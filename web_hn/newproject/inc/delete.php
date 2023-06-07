<?php
require_once "../inc/database.php";
if (!isset($_SESSION['uname'])) {
    header("Location: ../view/login.php");
    exit();
}
function xoa($table, $condition) {
    global $conn;

    //  SQL
    $sql = "DELETE FROM $table WHERE $condition";

    if ($conn->query($sql) === TRUE) {
        echo "Xóa dữ liệu thành công.";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
}
?>