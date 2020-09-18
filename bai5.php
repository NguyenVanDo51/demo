Lấy thông tin liên quan đến trình duyệt bạn đang sử dụng (User Agent) trong PHP

<?php
$arr_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE", "Trident"];

$agent = $_SERVER['HTTP_USER_AGENT'];
echo $agent . "<br>";
$user_browser = '';
foreach ($arr_browsers as $browser) {
    if (strpos($agent, $browser) !== false) {
        var_dump($agent, $browser, strpos($agent, $browser));
        $user_browser = $browser;
        break;
    }
}

switch ($user_browser) {
    case 'Trident':
    case 'MSIE':
        $user_browser = 'Internet Explorer';
        break;

    case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
}

echo "You are using ".$user_browser." browser";