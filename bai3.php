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
<form action="http://www.php.test/bai3.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" placeholder="User name" name="username">

    <label for="pwd">Password:</label>
    <input type="text" id="pwd" placeholder="Password" name="password">
    <button type="submit">Login</button>
</form>
<div>
    Viết PHP script để tạo một form đơn giản để nhận và hiển thị tên đăng nhập
    <?php
        echo "username: " . $_POST['username'];
    ?>
</div>
</body>
</html>
