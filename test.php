<?php

// 冒泡排序
$arr = [3, 1, 4, 2, 5, 9, 8, 6, 7, 0];
$n = count($arr);
for ($j = 0; $j < $n - 1; $j++) {
    // 每一趟最大的不一定在最上面，但最小得一定在最下面所以后面可以省略
    /******
     *****
     ****
     ***
     **
     */
    for ($i = 0; $i < $n - $j - 1; $i++) {
        if ($arr[$i + 1] < $arr[$i]) {
            $temp = $arr[$i];
            $arr[$i] = $arr[$i + 1];
            $arr[$i + 1] = $temp;
        }
    }
}
print_r($arr);

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




