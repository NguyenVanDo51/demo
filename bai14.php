Viết PHP script để lấy thông tin chỉnh sửa lần cuối cùng (Last Modified) của một file

<?php
    $filePath = 'bai14.php';
    if (is_file($filePath)) {
        echo "<div>" . date("d M Y H:i:s", filemtime('bai14.php')) ."</div>";
    } else {
        echo "Not found";
    }
