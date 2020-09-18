Viết PHP script để kiểm tra xem trang là được gọi từ https hay http

<?php
if (!empty($_SERVER['HTTPS'])) {
    echo 'https';
} else {
    echo 'http';
}