<?php
// 希尔排序
$arr4 = [3, 1, 4, 2, 5, 9, 8, 6, 7, 0];
function charu($m, $arr, $divide1)
{
    for ($i = $divide1; $i < $m; $i++) {
        $k = 0;
        while ($k + $divide1 < $m) {
            if ($arr[$k] > $arr[$k + $divide1]) {
                $tmp = $arr[$k];
                $arr[$k] = $arr[$k + $divide1];
                $arr[$k + $divide1] = $tmp;
            }
            $k += $divide1;
        }
    }
    print_r($arr);
}

$m = count($arr4);
$divide1 = floor($m / 2);
while ($divide1 > 0) {
    charu($m, $arr4, $divide1);
    $divide1 = floor($divide1 / 2);
}
