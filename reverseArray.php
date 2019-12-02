<?php

$array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

//时间复杂度：O(n/2)
//空间复杂度：O(1)
function reverse(array $arr): array{
	$low = 0;
	$high = count($arr)-1;
	$n = 0;
	while ($low < $high) {
		$tmp = $arr[$low];
		$arr[$low++] = $arr[$high];
		$arr[$high--] = $tmp;
		$n++;
	}
	var_dump("循环次数："+$n);
	return $arr;
}

//时间复杂度：O(n/2)
//空间复杂度：O(1)
function reverse2(array $arr): array{
	$length = count($arr);
	$tmp = 0;
	$n = 0;
	for($i=0; $i<$length/2; $i++){
		$tmp = $arr[$length - $i - 1];
		$arr[$length - $i - 1] = $arr[$i];
		$arr[$i] = $tmp;
		$n++;
	}
	var_dump("循环次数："+$n);
	return $arr;
}

//时间复杂度：O(n),最笨的方法
//空间复杂度：O(n)
function reverse3(array $arr): array{
	$length = count($arr)-1;
	$n = 0;
	for($i=$length; $i>=0; $i--){
		$newArr[] = $arr[$i];
		$n++;
	}
	var_dump("循环次数："+$n);
	return $newArr;
}

$res = reverse3($array);
var_dump($res);

?>