
<?php

include "../inc/update.php";
include "../action/updateSp.php";

?>



<form method="POST" action="">
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required>

            <br>
  
    <label for="ten_sp">Tên sản phẩm:</label>
    <input type="text" name="ten_sp" id="ten_sp" />
    <br>

    <label for="ghi_chu_sp">Ghi chú:</label>
    <textarea name="ghi_chu_sp" id="ghi_chu_sp"></textarea>
 <br>
    <input type="submit" name="update" value="Cập nhật" />
</form>
