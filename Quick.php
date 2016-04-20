<?php

$arr = [42, 33, 45, 65, 13, 67, 34, 54, 76, 39];

function Qsort($index, $ladex, $arr)
{

    global $arr;
    $key = $arr[$index];

    while ($index < $ladex) {

        while ($index < $ladex && $arr[$ladex] >= $key) {
            print($index . '~' . $ladex . '!');
            $ladex--;
        }
        if ($arr[$ladex] < $key) {
            $tmp = $arr[$index];
            $arr[$index] = $arr[$ladex];
            $arr[$ladex] = $tmp;
        }
        while ($index < $ladex && $arr[$index] <= $key) {
            print($index . '~' . $ladex . '?');
            $index++;
        }
        if ($arr[$index] > $key) {
            $tmp = $arr[$ladex];
            $arr[$ladex] = $arr[$index];
            $arr[$index] = $tmp;
        }
    }

    print_r($arr);
    return $index;
}

function Qself($index, $ladex, $arr)
{
    if ($index < $ladex) {
        $back = Qsort($index, $ladex, $arr);
        Qself($index, $back - 1, $arr);
        Qself($back + 1, $ladex, $arr);
    }
}

function start()
{
    global $arr;
    $m = count($arr) - 1;
    Qself(0, $m, $arr);
}

start();