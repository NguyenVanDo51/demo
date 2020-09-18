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
    <h1>Viết PHP script để lấy source code của một trang web</h1>

    <form action="bai13.php" method="post">
        <label for="url">URL:</label>
        <input type="text" id="url" name="url" value="<?= ($_SERVER['REQUEST_METHOD'] === 'POST') ? $_POST['url'] : null?>">
        <button type="submit">Get html</button>
    </form>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];
    if(filter_var($url, FILTER_VALIDATE_URL) != false) {
//    $html = file_get_contents($url);
        $html = file_get_contents('https://stackoverflow.com/questions/819182/how-do-i-get-the-html-code-of-a-web-page-in-php');
        if($html) {
            echo "<div><textarea style='width: 100%; height: 50vh;'>$html</textarea></div>";
        } else {
            echo "Null";
        }
    }else {
        echo "Invalid url";
    }

}
