<?php
    require_once  "../inc/delete.php";
// Gọi hàm xóa nếu có yêu cầu xóa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $condition = "id = $id";
        xoa ("san_pham", $condition);
    }
    // showw
    include "../inc/show.php";
    include "../view/deleteSp.php"
    ?>
   