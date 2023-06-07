<?php
include '../inc/post.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Xử lý khi thêm sản phẩm
    $tenSanPham = $_POST["tenSanPham"];
    $moTa = $_POST["moTa"];
    
    // Gọi hàm themMoi để thêm sản phẩm vào cơ sở dữ liệu
    themMoi("san_pham", ["ten_sp", "ghi_chu_sp"], [$tenSanPham, $moTa]);
}
?>
<!-- Form để người dùng nhập thông tin sản phẩm -->
<form method="POST" action="add_sp.php">
<input type="text" name="tenSanPham" placeholder="Tên sản phẩm">
<textarea name="moTa" placeholder="Mô tả"></textarea>
<input type="submit" value="Thêm sản phẩm">
</form>



