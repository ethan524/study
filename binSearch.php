<?php

/**
 * 二分查找的基本要素，数组或线性表必须是顺序存储，且元素按照关键字有序排列
 */

/**
 * [binSearch 二分查找]
 * 二分查找是首先确定一个中间点，然后判断要查找的元素是否等于中间点
 * 最好的情况是要查找的元素等于中间点，不等与的话就要判断是大于还是小于，如果大于，则将需要比较的区间设置为lo+1~hi
 * 如果小于，则将需要比较的区间设置为mi=hi,lo~hi.
 * 中间点的设置必须是 (lo + hi) >> 1，不可以为hi >> 1，否则将会在某一个区间内变成死循环
 * @param  array  $arr [description]
 * @param  int    $e   [description]
 * @return [type]      [description]
 */
function binSearch(array $arr, int $e): int{
	$lo = 0;
	$hi = count($arr)-1;
	while($lo < $hi){
		$mi = ($lo + $hi) >> 1;
		if($e < $arr[$mi]){
			$hi = $mi;
		}else if($e > $arr[$mi]){
			$lo = $mi+1;
		}else{
			return $mi;
		}
	}
	return -1;
}


function binSearch2(array $arr, int $e): int{
	$lo = 0;
	$hi = count($arr);

	while(1 < $hi - $lo){
		$mi = ($lo + $hi) >> 1;
		($e < $arr[$mi]) ? $hi = $mi : $lo = $mi;
	}
	return ($e == $arr[$lo]) ? $lo : -1;
}


$arr = [1,2,3,4,5,6,7,8,9];
$res = binSearch2($arr,7);
var_dump($res);

?>