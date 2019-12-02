<?php

/**
 * 获取整形数组中最大的两个元素
 */

function twoMax(array $arr): array{
	$len = count($arr);
	if($len < 2){
		return $arr;
	}

	list($max1, $max2) = $arr[0] > $arr[1] ? [$arr[0],$arr[1]] : [$arr[1], $arr[0]];

	for($i=2; $i<$len; $i++){
		if($arr[$i] > $max1){
			$max2 = $max1;
			$max1 = $arr[$i];
		}else if($arr[$i] > $max2){
			$max2 = $arr[$i];
		}
	}
	return [$max1, $max2];
}

$arr = [1,1225,2,68,37,34,53,5471,57,6,9,67,31,859,1111];
$res = twoMax($arr);
var_dump($res);

?>