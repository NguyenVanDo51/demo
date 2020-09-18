Hiển thị tất cả các số nằm trong khoảng (200, 250) mà chia hết cho 4
<?php
    $firstNumber = 1;
    $start = 1;
    $end = 250;

    while ($start <= $end) {
        if ($start % 4 == 0) {
            while ($start <= $end) {
                echo $start . "\t";
                $start += 4;
            }
            break;
        } else {
            $start ++;
        }
    }


