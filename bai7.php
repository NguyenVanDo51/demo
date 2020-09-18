Lấy URL trong PHP
<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo "url:$actual_link";