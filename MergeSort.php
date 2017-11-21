<?php

$arr1 = [3, 6, 8, 0, 6, 2, 4, 7, 3, 6, 8, 0, 6, 2, 4, 7, 3];
$arr2 = [];

function start()
{
    global $arr1, $arr2;

    $time = 1;
    $len = count($arr1);

    while ($time < $len) {

        $index = 0;
        $step = $time;
        $time = 2 * $step;

        while ($index < $len) {

            merge($index, $index + $step, $index + $time, $len);

            $index += $time;
        }

        $arr1 = $arr2;
    }

    print_r($arr1);

}

function merge($index, $next_index, $last_index, $len)
{
    global $arr1, $arr2;

    for ($k = $index, $i = $index, $j = $next_index; $i < $last_index || $j < $last_index; $k++) {

        if ($j < $last_index && $j < $len && $arr1[$i] >= $arr1[$j]) {
            $arr2[$k] = $arr1[$j];
            $arr1[$j++] = INF;
        } elseif (isset($arr1[$i]) && $arr1[$i] != INF) {
            $arr2[$k] = $arr1[$i++];
        } else {
            break;
        }
    }

}

start();
