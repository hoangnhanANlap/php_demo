<?php

include "../inc/post.php";

if (!isset($_SESSION['uname'])) {
    header("Location: ../view/login.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $tieuDe = $_POST["tieu_de"];
    $noiDung = $_POST["noi_dung"];
    
   
   themMoi("bai_viet", ["tieu_de", "noi_dung"], [$tieuDe, $noiDung]);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Thêm bài viết</title>
</head>
<body>
<h1>Thêm bài viết</h1>

<form method="POST" action="">
    <label for="tieu_de">Tiêu đề: </label>
    <input type="text" name="tieu_de" id= "tieu_de" required>
    
    <br>
    
    <label for="noi_dung">Nội dung:</label>
    <textarea name="noi_dung" id="noi_dung" required></textarea>
    
    <br>
    
    <input type="submit" value="Thêm bài viết">
</form>
</body>
</html>
