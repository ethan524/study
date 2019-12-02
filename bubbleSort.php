<?php

function bubbleSort(array $arr){
	$len = count($arr);
	for($i=0; $i<$len; $i++){
		for($j=$i;$j<$len-1;$j++){
			if($arr[$i] > $arr[$j+1]){
				list($arr[$i],$arr[$j+1]) = [$arr[$j+1],$arr[$i]];
			}
		}
	}
}

$arr = [1,0,19,234,9012,34,912,3048,0,91];
bubbleSort($arr);


?>