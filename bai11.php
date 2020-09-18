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
    <h1>Email Validation trong PHP</h1>
    <form action="bai11.php" method="post">
        <label for="email">Email</label>
        <input type="text" id="email" name="email">
    </form>
</body>
</html>
<?php
//
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    } else {
        $emailErr = "Valid email format";
    }
    echo $emailErr;
}

