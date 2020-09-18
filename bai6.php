<h1>Viết PHP script để lấy tên file hiện tại</h1>

<?php
// in console
//echo $_SERVER['PHP_SELF'];

echo basename(__FILE__);
