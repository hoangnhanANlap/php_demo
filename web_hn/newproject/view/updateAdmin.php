<?php

include "../inc/update.php";
include "../action/updateAdmin.php";
// $sql = "SELECT * FROM new_table  WHERE users='$username'";
// $result = $conn->query($sql);

// $user = $result->fetch_assoc();
?>
<!-- Form cập nhật người dùng -->

<form method="POST" action="">
<label for="id">ID:</label>
            <input type="text" name="id" id="id" required>

            <br> 
            <label for="users">Tên người dùng:</label>
    <input type="text" name="users" id="users" />
    <br> 

            <label for="password">Mật khẩu:</label>
    <input type="password" name="password" id="password" />
    <br> 

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" />
    <br> 

    <label for="name">Tên:</label>
    <input type="text" name="name" id="name" />
    <br> 

    <input type="submit" name="update" value="Cập nhật" />
</form>
