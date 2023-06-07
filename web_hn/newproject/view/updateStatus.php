<?php

 include "../inc/update.php";
 include "../action/updateStatus.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cập nhật thông tin</title>
</head>
<body>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["update_bai_viet"]))?>
        <h1>Cập nhật bài viết</h1>

        <form method="POST" action="">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required>

            <br>

            <label for="tieu_de">Tiêu đề:</label>
            <input type="text" name="tieu_de" id="tieu_de" required>

            <br>

            <label for="noi_dung">Nội dung:</label>
            <textarea name="noi_dung" id="noi_dung" required></textarea>

            <br>

            <input type="submit" name="update" value="Cập nhật bài viết">
        </form>
   
        <?php  ?>
</body>
</html>