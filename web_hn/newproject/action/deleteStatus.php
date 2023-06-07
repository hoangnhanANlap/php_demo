<?php
    require_once  "../inc/delete.php";


    // Gọi hàm xóa nếu có yêu cầu xóa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $condition = "id = $id";
        xoa ("bai_viet", $condition);
    }

    // Hàm lấy danh sách dữ liệu
    include "../inc/show.php";
    include "../view/deleteStatus.php";
?>

