<?php

// 插入排序
$arr2 = [3, 1, 4, 2, 5, 9, 8, 6, 7, 0];
$m = count($arr2);
for ($i = 1; $i < $m; $i++) {
    if ($arr2[$i] < $arr2[$i - 1]) {
        $tmp = $arr2[$i];
        $j = $i - 1;
        //将从j开始de数往后推直到不比前面得数小
        while ($tmp < $arr2[$j]) {
            $arr2[$j + 1] = $arr2[$j];
            $j--;
            if ($j < 0) break;
        }
        $arr2[$j + 1] = $tmp;
    }
}
print_r($arr2);
