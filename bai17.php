Viết PHP script để dừng thực thi chương trình trong một khoảng thời gian đã cho
<?php
$startTime = time();
$i = 0;
do {
    print_r($i . "\n");
    $i ++;
    sleep(1);
} while( (time() - $startTime) < 5);

?>