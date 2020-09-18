Sử dụng toán tử tam phân kiểm tra một số là lớn hơn 10, 15 hay 20

<?php
function ToanTuTamPhan($n)
{
    return $n > 20 ? "Number = $n Lon hon 20" :
            ($n > 15 ? "Number = $n Lon hon 15" :
                ($n > 10 ? "Numer = $n Lon hon 10" : "Number = $n Nho hon 10"));
}
echo "<br>";
echo ToanTuTamPhan(9) . "<br>";
echo ToanTuTamPhan(11) . "<br>";
echo ToanTuTamPhan(16) . "<br>";
echo ToanTuTamPhan(22) . "<br>";