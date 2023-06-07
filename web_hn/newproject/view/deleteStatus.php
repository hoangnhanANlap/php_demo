<!DOCTYPE html>
<html>
<head>
<title>Danh sách bài viết</title>
</head>
<body>
<h1>Danh sách bài viết</h1>

<table>
    <tr>
        <th>ID</th>
        <th>Tiêu đề</th>
        <th>Nội dung</th>
        <th></th>
    </tr>
    <?php
        show("bai_viet", ["id", "tieu_de", "noi_dung"]);
    ?>
</table>

</body>
</html>
