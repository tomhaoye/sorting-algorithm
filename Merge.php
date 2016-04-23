<?php

$arr1 = [21,32,54,43,65,31,76,56,89,91];
$arr2 = [];
$len = count($arr1);

function merge($arr1,$arr2,$index,$nedex,$ladex){
	global $arr2;
	for($k = $index, $j = $nedex; $index < $nedex && $j <= $ladex; ++$k){
		if($arr1[$index] > $arr1[$j]){
			$arr2[$k] = $arr1[$j++];
		}else{
			$arr2[$k] = $arr1[$index++];
		}
	}
	while($j < $nedex) $arr2[$k++] = $arr1[$j++];
	while($j < $ladex) $arr2[$k++] = $arr1[$j++];
	print_r($arr2);
}

// merge($arr1,$arr2,0,1,2);

function start($arr1,$arr2,$len){
	global $arr1;
	$time = 1;
	while($time < $len){
		$i = 0;
		$step = $time;
		$time = 2*$step;
		while ($i < $len-$time) {
			merge($arr1,$arr2,$i,$i+$step,$i+$time);
			$i = $i+$time;
		}
		if($i < $len - $step){  
            Merge($arr1, $arr2, $i, $i+ $step , $len);
        }  
        $tmp = $arr1;
        $arr1 = $arr2;
        $arr2 = $tmp;
		$time++;
	}
	print_r($arr1);
}

start($arr1,$arr2,$len);


