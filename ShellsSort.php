<?php

// 希尔排序
$arr4 = [3, 1, 4, 2, 5, 9, 8, 6, 7, 0];
function charu($m,$arr,$divide1){
    for ($i = $divide1; $i < $m; $i++) {
        if ($arr[$i] < $arr[$i - $divide1]) {
            $tmp = $arr[$i];
            $j = $i - $divide1;
            //将从j开始de数往后推直到不比前面得数小
            while ($tmp < $arr[$j]) {
                $arr[$j + $divide1] = $arr[$j];
                $j--;
                if ($j < 0) break;
            }
            $arr[$j + $divide1] = $tmp;
        }
    }
    echo('希尔');
    print_r($arr);
}
$m = count($arr4);
$divide1 = floor($m/2);
while($divide1 >= 1){
    charu($m,$arr4,$divide1);
    $divide1 = floor($divide1/2);
}
