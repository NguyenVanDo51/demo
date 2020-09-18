<h1>Viết PHP script để kiểm tra xem trang là được gọi từ https hay http</h1>

<?php
if (!empty($_SERVER['HTTPS'])) {
    echo 'https';
} else {
    echo 'http';
}