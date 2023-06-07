
    <!DOCTYPE html>
<html>
<head>
<title>Danh sách sản phẩm</title>
</head>
<body>
<h1>Danh sách sản phẩm</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Ghi chú sp</th>
    </tr>
    <?php
       show("san_pham", ["id", "ten_sp", "ghi_chu_sp"]);
    ?>
</table>

</body>
</html>