<?php

// 选择排序
$arr3 = [3, 1, 4, 2, 5, 9, 8, 6, 7, 0];
$m = count($arr3);
for ($i = 1; $i < $m; $i++) {
    //找后面最小
    $min = $arr3[$i];
    $index = $i;
    for ($j = $i+1; $j < $m; $j++) {
        if ($arr3[$j] < $min) {
            $min = $arr3[$j];
            $index = $j;
        }
    }
    //替换
    if ($arr3[$index] < $arr3[$i - 1]) {
        $ex = $arr3[$i - 1];
        $arr3[$i - 1] = $arr3[$index];
        $arr3[$index] = $ex;
    }
}
print_r($arr3);