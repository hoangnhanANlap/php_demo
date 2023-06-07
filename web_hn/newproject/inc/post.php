<?php
    require_once "../inc/database.php"; 

    if (!isset($_SESSION['uname'])) {
        header("Location: ../view/login.php");
        exit();
    }
    function themMoi($table, $fields, $values) {
        global $conn;

        // chuỗi trường và giá trị
        $fieldString = implode(", ", $fields);
        $valueString = implode("', '", $values);

        // SQL
        $sql = "INSERT INTO $table ($fieldString) VALUES ('$valueString')";

        if ($conn->query($sql) === TRUE) {
            echo "Thêm mới thành công.";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    }
