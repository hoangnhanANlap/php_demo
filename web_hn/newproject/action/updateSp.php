<?php


// Cập nhật thông tin sản phẩm
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update"])) {
    $id = $_POST["id"];
    $tenSanPham = $_POST["ten_sp"];
    $giaSanPham = $_POST["ghi_chu_sp"];

  capNhat ("san_pham", "id", $id, ["ten_sp", "ghi_chu_sp"], [$tenSanPham, $giaSanPham]);
}

?>