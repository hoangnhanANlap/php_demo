<?php



// Cập nhật thông tin bài viết
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $tieuDe = $_POST["tieu_de"];
    $noiDung = $_POST["noi_dung"];

    capNhat("bai_viet", "id", $id, ["tieu_de", "noi_dung"], [$tieuDe, $noiDung]);
}



?>