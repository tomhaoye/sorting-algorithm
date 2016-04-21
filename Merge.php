<?php

$arr1 = [21,32,43,54,31,65,76,56,89,91];
$arr2 = [];
$len = count($arr1);

function merge($arr1,$arr2,$index,$nedex,$ladex){
	for($k = $index, $j = $nedex + 1; $index < $nedex && $j < $ladex; ++$k){
		if($arr1[$index] > $arr1[$j]){
			$arr2[$k] = $arr1[$j++];
		}else{
			$arr2[$k] = $arr1[$index++];
		}
	}
	while($j <= $nedex) $arr2[$k++] = $arr1[$j++];
	while($j <= $ladex)  $arr2[$k++] = $arr1[$j++];
	print_r($arr2);
}


merge($arr1,$arr2,0,1,9);

function start(){
	
}

start();


