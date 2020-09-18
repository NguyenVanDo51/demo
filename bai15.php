Viết PHP script để đếm số dòng trong một file

<?php
    $filePath = "bai15.php";

    if (is_file($filePath)) {
        echo "<br>Lines number is " . count(file($filePath));
    } else {
        echo "Not found";
    }