<?php

// 冒泡排序
$arr = [7, 6, 8, 9, 0, 1, 5, 4, 3, 2];

$n = count($arr);
//标记当轮是否发生替换，若无即有序
$change = false;

for ($j = 1; $j < $n; $j++) {
    /******
     *****
     ****
     ***
     **
     */
    for ($i = 0; $i < $n - $j; $i++) {
        if ($arr[$i + 1] < $arr[$i]) {
            $change = true;
            $temp = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $temp;
        }
    }

    if (!$change) {
        break;
    }
}
print_r($arr);
