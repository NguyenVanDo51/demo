<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Viết PHP script để lấy thời gian chỉnh sửa lần cuối cùng của trang hiện tại</h1>
</body>
</html>

<?php

    echo "<p>Last modified at " .  date("d M Y H:i:s", filemtime(__FILE__)) . "</p>" ;

