<?php
function show ($table, $columns) {
        global $conn;

        $columnString = implode(", ", $columns);
        $sql = "SELECT $columnString FROM $table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                foreach ($columns as $column) {
                    echo "<td>" . $row[$column] . "</td>";
                }
                echo "<td><form method='POST' action=''><input type='hidden' name='id' value='" . $row['id'] . "'><input type='submit' value='Xóa'></form></td>";
                echo "</tr>";
            }
        } else {
            echo "Không có dữ liệu.";
        }
    }