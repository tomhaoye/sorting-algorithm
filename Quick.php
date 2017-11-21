<?php

$arr = [42, 33, 45, 65, 13, 67, 34, 54, 76, 39, 99, 111, 233, 445, 65, 173, 627, 334, 554, 756, 349];

function Qsort($index, $last_index, $arr)
{

    global $arr;
    $key = $arr[$index];

    while ($index < $last_index) {

        while ($index < $last_index && $arr[$last_index] >= $key) {
            print($index . '~' . $last_index . '!');
            $last_index--;
        }
        if ($arr[$last_index] < $key) {
            $tmp = $arr[$index];
            $arr[$index] = $arr[$last_index];
            $arr[$last_index] = $tmp;
        }
        while ($index < $last_index && $arr[$index] <= $key) {
            print($index . '~' . $last_index . '?');
            $index++;
        }
        if ($arr[$index] > $key) {
            $tmp = $arr[$last_index];
            $arr[$last_index] = $arr[$index];
            $arr[$index] = $tmp;
        }
    }

    print_r($arr);
    return $index;
}

function Qself($index, $last_index, $arr)
{
    if ($index < $last_index) {
        $back = Qsort($index, $last_index, $arr);
        Qself($index, $back - 1, $arr);
        Qself($back + 1, $last_index, $arr);
    }
}

function start()
{
    global $arr;
    $m = count($arr) - 1;
    Qself(0, $m, $arr);
}

start();
