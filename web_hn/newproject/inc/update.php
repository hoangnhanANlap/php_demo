<?php
include "../inc/database.php";
if (!isset($_SESSION['uname']) || empty($_SESSION['uname'])) {
    header("Location: ../view/login.php");
    exit;
 }
function capNhat($table, $idField, $id, $fields, $values) {
    global $conn;
   

    // Xử lý dữ liệu từ form và cập nhật vào SQL nếu có
    if (isset($_POST['update'])) {
        $updateValues = array();
        for ($i = 0; $i < count($fields); $i++) {
            $updateValues[] = "$fields[$i] = '$values[$i]'";
        }
        $updateString = implode(", ", $updateValues);

        $sql = "UPDATE $table SET $updateString WHERE $idField = $id";
        if ($conn->query($sql) === TRUE) {
            echo "Cập nhật dữ liệu thành công.";
        } else {
            echo "Lỗi: " . $conn->error;
        }
    }
}
?>