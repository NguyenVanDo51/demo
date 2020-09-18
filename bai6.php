Viết PHP script để lấy tên file hiện tại

<?php
// in console
//echo $_SERVER['PHP_SELF'];

echo basename(__FILE__);
