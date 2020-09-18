<h1>Lấy URL trong PHP</h1>
<?php
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo "url:$actual_link";